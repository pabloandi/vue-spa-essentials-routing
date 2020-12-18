<template>
    <div class="container">
        <div class="columns">
            <div class="column">

                <add-to-stream @completed="addStatus"></add-to-stream>

                <div class="message" v-for="status in statuses" v-bind:key="status.id">
                    <div class="message-header">
                       <p v-text="status.user.name"></p>
                        <p>
                            {{ status.created_at | ago }}
                        </p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

import { DateTime } from 'luxon'

import Status from '../models/Status'

import AddToStream from '../components/AddToStream'

export default {
    components: {
        AddToStream
    },
    data(){
        return {
            statuses: [

            ]
        }
    },
    filters: {
        ago(date){
            return DateTime.fromISO(date).setLocale('co').toLocaleString(DateTime.DATETIME_FULL);
        }
    },
    created(){

        Status.all()
        .then(({data}) => this.statuses = data);
    },
    methods: {
        addStatus(status){
            this.statuses.unshift(status);
        }
    }
}
</script>

<style>

</style>
