<template>
    <div class="card">
        <dx-grid :rows="rows" :columns="columns">
            <!-- <percent-type-provider :for="percentColumns" /> -->
            <!-- <currency-type-provider :for="currencyColumns" /> -->
            <dx-filtering-state :filters.sync="filters" />
            <dx-sorting-state :sorting.sync="sorting" />
            <dx-grouping-state :grouping.sync="grouping" :expandedGroups.sync="expandedGroups" />
            <dx-paging-state :pageSize.sync="pageSize" :currentPage.sync="currentPage" />
            <dx-selection-state :selection.sync="selection" />
            <dx-integrated-filtering />
            <dx-integrated-sorting />
            <dx-integrated-grouping />
            <dx-integrated-paging />
            <dx-integrated-selection />
            <dx-table />
            <!-- <dx-table :columnExtensions="tableColumnExtensions" :cellComponent="$options.components.MyCell" /> -->
            <dx-table-header-row showSortingControls showGroupingControls />
            <!-- <dx-table-header-row /> -->
            <dx-table-filter-row showFilterSelector />
            <dx-table-selection showSelectAll />
            <dx-table-group-row />
            <dx-table-column-visibility :hiddenColumnNames.sync="hiddenColumnNames" />
            <dx-toolbar />
            <dx-grouping-panel showSortingControls showGroupingControls />
            <dx-paging-panel :pageSizes="pageSizes" />
            <dx-column-chooser />
        </dx-grid>
    </div>
</template>

<script>
    import {
        DxFilteringState,
        DxSortingState,
        DxGroupingState,
        DxPagingState,
        DxSelectionState,
        DxIntegratedFiltering,
        DxIntegratedSorting,
        DxIntegratedGrouping,
        DxIntegratedPaging,
        DxIntegratedSelection,
    } from '@devexpress/dx-vue-grid';

    import {
        DxGrid,
        DxTable,
        DxTableHeaderRow,
        DxTableFilterRow,
        DxTableGroupRow,
        DxTableSelection,
        DxPagingPanel,
        DxToolbar,
        DxGroupingPanel,
        DxColumnChooser,
        DxTableColumnVisibility,
    } from '@devexpress/dx-vue-grid-bootstrap4';

    export default {
        name: "Datatable",
        components: {
            DxFilteringState,
            DxSortingState,
            DxGroupingState,
            DxPagingState,
            DxSelectionState,
            DxIntegratedFiltering,
            DxIntegratedSorting,
            DxIntegratedGrouping,
            DxIntegratedPaging,
            DxIntegratedSelection,
            DxGrid,
            DxTable,
            DxTableHeaderRow,
            DxTableFilterRow,
            DxTableGroupRow,
            DxTableSelection,
            DxPagingPanel,
            DxToolbar,
            DxGroupingPanel,
            DxColumnChooser,
            DxTableColumnVisibility,
            // MyCell,
            // CurrencyTypeProvider,
            // PercentTypeProvider,
        },
        method: {
            generateRows: () => {
                return [
                    { product: 'product', region: 'region', amount: 'amount', discount: 'discount', saleDate: 'saleDate', customer: 'customer' },
                    { product: 'product', region: 'region', amount: 'amount', discount: 'discount', saleDate: 'saleDate', customer: 'customer' },
                    { product: 'product', region: 'region', amount: 'amount', discount: 'discount', saleDate: 'saleDate', customer: 'customer' },
                ];

            },

        },
        data() {
            return {
                columns: [
                    { name: 'product', title: 'Product' },
                    { name: 'region', title: 'Region' },
                    { name: 'amount', title: 'Sale Amount' },
                    { name: 'discount', title: 'Discount' },
                    { name: 'saleDate', title: 'Sale Date' },
                    { name: 'customer', title: 'Customer' },
                ],
                tableColumnExtensions: [
                    { columnName: 'amount', align: 'right' },
                ],
                rows: [
                    { product: 'product', region: 'region', amount: 43, discount: 'discount', saleDate: 'saleDate', customer: 'customer' },
                    { product: 'break', region: 'test', amount: 103, discount: 'discount', saleDate: 'saleDate', customer: 'customer' },
                    { product: 'break', region: 'vast', amount: 423, discount: 'discount', saleDate: 'saleDate', customer: 'customer' },

                ],
                filters: [
                    // { columnName: 'saleDate', value: '2016-02' }
                ],
                sorting: [
                    { columnName: 'product', direction: 'asc' },
                    { columnName: 'saleDate', direction: 'asc' },
                ],
                grouping: [{ columnName: 'product' }],
                expandedGroups: ['EnviroCare Max'],
                selection: [],
                currentPage: 0,
                pageSize: 10,
                pageSizes: [5, 10, 15],
                currencyColumns: ['amount'],
                percentColumns: ['discount'],
                hiddenColumnNames: ['customer'],
            };
        }
    }
</script>

<style lang="scss" scoped>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
    @import "./../../../node_modules/@devexpress/dx-vue-grid-bootstrap4/dist/dx-vue-grid-bootstrap4.css";
    @import "./../../../node_modules/open-iconic/font/css/open-iconic-bootstrap.css";
</style>