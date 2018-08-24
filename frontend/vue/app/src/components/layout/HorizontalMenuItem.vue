<template>
    <ul :id="id" :class="options">
        <li v-for="item in items">
            <router-link :to="item.url">{{item.name}}</router-link>
        </li>
    </ul>
</template>
<script>
    export default {
        name: 'horizontal-menu-item',
        data() {
            return {
                id: 'Dashboarddropdown',
                options: 'dropdown-content dropdown-horizontal-list',
                items: [
                    {
                        'name': 'eCommerse',
                        'url': '/dashboard-ecommerce',
                    },
                    {
                        'name': 'Analytics',
                        'url': '/dashboard-analytics',
                    },
                    {
                        'name': 'Test',
                        'url': '/dashboard-test',
                    },
                ],
            }
        }
    }
</script>