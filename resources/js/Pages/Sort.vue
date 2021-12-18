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
        },
        sortDirection: {
            type: String,
            required: true
        }
    },

    data() {
        return {
            sorted: this.sortable.sort((a, b) => {
                if (this.sortDirection === 'asc') {
                    return Math.sign(a - b);
                }

                return Math.sign(b - a);
            }).join(', ')
        }
    }
}
</script>
