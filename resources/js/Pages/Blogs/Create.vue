<template>
    <div class="flex flex-col">

        <label for="title">Title</label>
        <input class="w-60" id="title" type="text" v-model="form.title">

        <label for="description">Description</label>
        <input class="w-60" id="description" type="text" v-model="form.description">
        <!-- ca sa salvez ce am in inputuri folosesc vmodel -->

        <button @click="saveBlog">Save</button>

    </div>
</template>
<script>
export default {

    data() {
        return {
            form: {
                title: '',
                description: ''
            }

        }
    },

    methods:
    {
        saveBlog() {
            this.$inertia.post(route('blogs.create'), this.form);

        }

    }
}
</script>