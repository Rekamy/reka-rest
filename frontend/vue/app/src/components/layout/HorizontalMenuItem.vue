<template>
    <ul v-bind:id="id" class="dropdown-content dropdown-horizontal-list">
        <li v-for="child in items">
            <router-link :to="child.url">{{child.name}}</router-link>
        </li>
    </ul>
</template>
<script>
    export default {
        name: 'horizontal-menu-item',
        data() {
            //console.log(this.items)
            return {
            }
        },
        props:{
            items: {
                type: Array,
                required: false
            },
            id: {
                type: String
            }
        },
        created(){
            console.log(this);
        }
        
    };
</script>