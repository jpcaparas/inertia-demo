<template>
    <div>
        The sorted numbers are {{ sorted }}
    </div>
</template>

<script>
export default {
    props: {
        sortable: {
            type: Array,
            required: true
        }
    },

    data() {
        return {
            sorted: this.sortable.sort((a, b) => {
                return Math.sign(a > b);
            }).join(', ')
        }
    }
}
</script>
