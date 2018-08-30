import Multiselect from 'vue-multiselect'

export default {
    name: 'form-text',
    components: {
        Multiselect
    },
    mounted() {
        //init select
        this.init_select();
        //init datepicker
        this.init_datepicker();
        //init timepicker
        this.init_timepicker();
        //init autocomplete
        this.init_autocomplete();
    },
    methods : {
        init_select(){
            $('select').material_select();
            //$('select').select2();
        },
        init_datepicker(){
            $('.datepicker').pickadate({
                format: "dd/mm/yyyy",
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false, // Close upon selecting a date,
                container: 'html', // ex. 'body' will append picker to body
            });
        },
        init_timepicker(){
            $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: false, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Clear', // text for clear-button
                canceltext: 'Cancel', // Text for cancel-button,
                container: undefined, // ex. 'body' will append picker to body
                autoclose: true, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
            });
        },
        init_autocomplete(){
            var prev_data = [];
            var auto  = $('input.autocomplete');
            auto.autocomplete({
                data: {
                "Apple": null,
                "Microsoft": null,
                "Google": null //image
            },
            limit: 2, // The max amount of results that can be shown at once. Default: Infinity.
            onAutocomplete: function(val) {
                // Callback function when value is autcompleted.

            },
            minLength: 0, // The minimum length of the input for the autocomplete to start. Default: 1.
            });
            
        },
        checkForm(){
            console.log(this.form);
            this.errors.push(1);
        }
    },
    data() {
        return {
            errors: [],
            solo: [],
            multi: [],
            options: [
                { name: 'Vue.js', language: 'JavaScript' },
                { name: 'Adonis', language: 'JavaScript' },
                { name: 'Rails', language: 'Ruby' },
                { name: 'Sinatra', language: 'Ruby' },
                { name: 'Laravel', language: 'PHP' },
                { name: 'Phoenix', language: 'Elixir' }
            ],
            form: {}
        }
    }
}