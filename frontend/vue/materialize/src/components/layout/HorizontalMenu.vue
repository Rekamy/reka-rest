<template>
    <nav id="horizontal-nav" class="white hide-on-med-and-down">
        <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
                <li :class="item.active" v-for="item in items" :key="item.id" >
                    <a v-if="item.items.length" :class="item.options" href="#" :data-activates="item.activateEvent">
                        <i class="material-icons">{{item.icon}}</i>
                        <span>{{item.name}} &nbsp;
                            <i class="material-icons right">keyboard_arrow_down</i>
                        </span>
                    </a>
                    <router-link v-else :to="item.url">
                        <i class="material-icons">{{item.icon}}</i>
                        <span>{{item.name}}</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'HorizontalMenu',
        props: {
            items: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
            }
        }
    }
</script>