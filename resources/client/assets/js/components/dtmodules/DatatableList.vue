<template>
    <div>
        <span class="badge badge-success" v-for="item in value">
            {{ item[$root.relationships[field]] }}
        </span>
    </div>
</template>


<script>
export default {
    props: ['value', 'field'],
    data() {
        return {
            // Code...
        }
    },
    created() {
        // Code...
    },
    methods: {
        // Code...
    }
}
</script>


<style scoped>

</style>

