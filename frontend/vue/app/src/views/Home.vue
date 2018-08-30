<template>
  <div class="home">
    <widget-breadcrums>
      <li>
        <router-link to="/">Dashboard</router-link>
      </li>
      <li class="active">Dashboard</li>
    </widget-breadcrums>
    <widget-card></widget-card>
    <!-- <widget-datatable/> -->
    <!-- <widget-vuetable/> -->
    <widget-table/>
    <widget-form></widget-form>
  </div>
</template>

<script>
// @ is an alias to /src
// import Vuetable from "@/components/widget/Vuetable.vue";
// import Datatable from '@/components/widget/Datatable.vue'
import WidgetTable from '@/components/widget/Table.vue'
// import WidgetTable from '@/components/element-ui/components/Table.vue'
import WidgetCard from "@/components/widget/Card.vue";
import WidgetBreadcrums from "@/components/widget/Breadcrums.vue";
import WidgetForm from "@/components/widget/Form/Form.vue";

export default {
  name: "home",
  components: {
    // WidgetVuetable,
    // WidgetDatatable,
    WidgetTable,
    WidgetBreadcrums,
    WidgetCard,
    WidgetForm
  }
};
</script>

