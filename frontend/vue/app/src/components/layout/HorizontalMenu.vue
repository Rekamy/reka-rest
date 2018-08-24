<template>
    <nav id="horizontal-nav" class="white hide-on-med-and-down">
        <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
                <li :class="item.active" v-for="item in items">
                    <a :class="item.options" href="#" :data-activates="item.activateEvent">
                        <i class="material-icons">{{item.icon}}</i>
                        <span>{{item.name}}
                            <i class="material-icons right">keyboard_arrow_down</i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'HorizontalMenu',
        data() {
            return {
                id: 'Dashboarddropdown',
                options: 'dropdown-content dropdown-horizontal-list',
                items: [
                    {
                        'name': 'Dashboard',
                        'icon': 'dashboard',
                        'active': 'active',
                        'options': 'dropdown-menu',
                        'activateEvent': 'Dashboarddropdown',
                    },
                    {
                        'name': 'Company',
                        'icon': 'dvr',
                        'active': '',
                        'options': 'dropdown-menu',
                        'activateEvent': 'Dashboarddropdown',
                    },
                    {
                        'name': 'Order',
                        'icon': 'cast',
                        'active': '',
                        'options': 'dropdown-menu',
                        'activateEvent': 'Dashboarddropdown',
                    },
                ],
            }
        }
    }
</script>