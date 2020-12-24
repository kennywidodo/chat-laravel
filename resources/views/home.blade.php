@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" id="user_id" value="{{ auth()->user()->id }}">
                    <!--Used to search user that exist in database-->
                    <div class="form-group">
                        <label for="search">Search user</label>
                        <input v-model="search" type="search" class="form-control" placeholder="User">
                    </div>
                    <!--User list-->
                    <ul class="list-user list-group list-group-flush">
                        <a v-for="(user, index) in users" v-bind:key="index"
                            v-if="user.id != id"
                            :class="['list-group-item d-flex justify-content-between align-items-center list-group-item-action', {
                                'active': isActive === index && search == '' ? true : false
                            }]"
                            v-on:click="fetchMessages(user.id)">
                            <div class="media">
                                <div class="media-body">
                                    <strong>@{{ user.name }}</strong>
                                </div>
                            </div>
                        </a>
                    </ul>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body card-message" id="card-message-scroll">
                            <ul v-if="isActive != null" class="list-group list-group-flush">
                                <div v-for="(message, index) in messages" v-bind:key="index">
                                    <li v-if="message.from_id != {{ auth()->user()->id }}" class="list-group-item">
                                        <div class="list-message-item">
                                            <div class="alert alert-warning mb-3">
                                                @{{ message.content }}
                                            </div>
                                        </div>
                                    </li>
                                    <li v-else class="list-group-item">
                                        <div class="list-message-item right">
                                            <div class="alert alert-danger mb-3">
                                                @{{ message.content }}
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                            <h5 v-else class="text-center">Search user to chat with</h5>
                        </div>
                    </div>
                    <div v-if="isActive != null" class="form-group mt-3">
                        <form @submit.prevent="sendMessage">
                            <input v-model="form.content" type="text" class="form-control" placeholder="Message" required>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
