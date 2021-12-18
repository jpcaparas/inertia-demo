<template>
    <div>
        Hello {{ name }}
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        required: true
    }
}
</script>
