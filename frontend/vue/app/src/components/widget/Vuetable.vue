<template>
	<div class="ui container">
			<div class="card">
				<h4 class="header2">Form Advance</h4>
				<div class="row">
                    <filter-bar></filter-bar>
                    <vuetable ref="vuetable"
                        api-url="https://vuetable.ratiw.net/api/users"
                        :fields="fields"
                        :css="css.table"
                        :multi-sort="true"
                        pagination-path=""
                        @vuetable:pagination-data="onPaginationData"
                    ></vuetable>
                    <div>
                        <vuetable-pagination-info ref="paginationInfoTop" ></vuetable-pagination-info>
                        <vuetable-pagination ref="pagination" 
                            :css="css.pagination"
                            @vuetable-pagination:change-page="onChangePage"
                        ></vuetable-pagination>
                    </div>
				</div>
			</div>
		</div>
</template>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script>
import Vuetable from "vuetable-2/src/components/Vuetable";
import VuetablePagination from "vuetable-2/src/components/VuetablePagination";
import FilterBar from "./VuetableSearch";
import VuetablePaginationInfo from 'vuetable-2/src/components/VuetablePaginationInfo'

export default {
  components: {
    Vuetable,
    VuetablePagination,
    VuetablePaginationInfo,
    FilterBar
  },
  data() {
    return {
      css: {
        table: {
          tableClass: "table table-striped table-bordered",
          ascendingIcon: "glyphicon glyphicon-chevron-up",
          descendingIcon: "glyphicon glyphicon-chevron-down",
          handleIcon: "glyphicon glyphicon-menu-hamburger",
          renderIcon: function(classes, options) {
            return `<span class="${classes.join(" ")}"></span>`;
          }
        },
        pagination: {
          wrapperClass: "pagination pull-right",
          activeClass: "btn-primary",
          disabledClass: "disabled",
          pageClass: "btn btn-border",
          linkClass: "btn btn-border",
          icons: {
            first: "",
            prev: "",
            next: "",
            last: ""
          }
        }
      },
      fields: [
        "name",
        "email",
        "birthdate",
        {
          name: "nickname",
          sortField: "nickname"
        },
        {
          name: "gender",
          sortField: "gender",
          titleClass: "center aligned",
          dataClass: "center aligned",
          callback: "genderLabel"
        },
        {
          name: "salary",
          sortField: "salary"
        },
        {
          name: "address.line1",
          sortField: "address.line1",
          title: "Address 1"
        },
        {
          name: "address.line2",
          sortField: "address.line2",
          title: "Address 2"
        },
        {
          name: "address.zipcode",
          sortField: "address.zipcode",
          title: "Zipcode"
        }
      ]
    };
  },
  methods: {
    //...
    genderLabel(value) {
      return value === "M"
        ? '<span class="ui teal label"><i class="large man icon"></i>Male</span>'
        : '<span class="ui pink label"><i class="large woman icon"></i>Female</span>';
    },
    onPaginationData(paginationData) {
      this.$refs.pagination.setPaginationData(paginationData);
      this.$refs.paginationInfo.setPaginationData(paginationData);
    },
    onChangePage(page) {
      this.$refs.vuetable.changePage(page);
    }
  }
};
</script>

<style scoped>
.home {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
/* @import url("https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css"); */
@import url("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css");
</style>
