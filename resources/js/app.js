require('./bootstrap');

import Vue from 'vue'
new Vue({
    el: '#app',
    data: {
        id: document.getElementById('user_id').value,
        search: '',
        messages: [],
        users: [],
        form: {
            to_id: '',
            content: ''
        },
        isActive: null
    },
    mounted() {
        this.fetchUsers()
    },
    methods: {
        //get all user
        fetchUsers() {
            let q = _.isEmpty(this.search) ? 'all' : this.search
            
            axios.get('/message/user/' + q).then(({ data }) => {
                this.users = data
            })
        },
        //get message from selected user
        fetchMessages(id) {
            this.form.to_id = id
            axios.get('/message/user-message/' + id).then(({ data }) => {
                this.messages = data
                this.isActive = this.users.findIndex((s) => s.id === id)
                this.users[this.isActive].count = 0
            })
        },
        //send message
        sendMessage() {
            axios.post('message/user-message', this.form).then(({ data }) => {
                this.pushMessage(data, data.to_id)
                this.form.content = ''
                this.search = ''
            })
        },
        pushMessage(data, user_id, action = '') {
            let index = this.users.findIndex((s) => s.id === user_id)

            if (index != -1 && action == 'push') {
                this.users.splice(index, 1)
            }

            /**
             * if submit message
             */
            if (action == '') {
                this.users[index].content = data.content
                this.users[index].to_id = data.to_id

                let user = this.users[index]

                this.users.splice(index, 1)
                this.users.unshift(user)
            }

            /**
             * else
             */
            else {
                this.users.unshift(data)
            }

            /**
             * send message and display at the chat box the sent one 
             */
            //note for this function it must refresh the other user to show message/ click the user that is chatted with
            if (this.form.to_id != '') {
                index = this.users.findIndex((s) => s.id === this.form.to_id)

                this.users[index].count = 0
                this.isActive = index

                if (this.form.to_id == user_id) {

                    this.messages.push({
                        content: data.content,
                        created_at: data.created_at,
                        from_id: data.from_id,
                    })

                    axios.get('/message/user-message/' + user_id + '/read')
    
                }

            }
        },
        scrollToEnd: function () {
            let container = this.$el.querySelector("#card-message-scroll");
            container.scrollTop = container.scrollHeight;
        }
    },
    watch: {
        search: _.debounce( function() {
            this.fetchUsers()
        }, 500),
        messages: _.debounce( function() {
            this.scrollToEnd()
        }, 10),
    }
})
