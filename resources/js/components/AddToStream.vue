<template>
    <div class="message">
        <div class="message-header">
            Form to send a post
        </div>
        <div class="message-body">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input" v-model="form.body" autofocus>
                        <span class="help is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')">ffwef</span>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" :disabled="form.errors.any()">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light" @click="form.body=''">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</template>

<script>


export default {
    data() {
        return {
            form: new Form({
                body: ''
            }),
        }
    },
    methods: {
        onSubmit(){
            this.form.post('/statuses')
            .then(status => this.$emit('completed', status));
        }
    }
}
</script>

<style>

</style>
