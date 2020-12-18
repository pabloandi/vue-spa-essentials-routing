<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" v-bind:key="status.id">
                    <div class="message-header">
                       <p v-text="status.user.name"></p>
                        <p v-text="status.created_at"></p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Status from '../models/Status'

export default {
    data(){
        return {
            statuses: [

            ]
        }
    },
    created(){

        Status.all()
        .then(({data}) => this.statuses = data);
    },
    methods: {

    }
}
</script>

<style>

</style>
