<template>
  <div class="dashboard">
    <widget-breadcrums>
      <li>
        <router-link to="/">Dashboard</router-link>
      </li>
      <li class="active">Dashboard</li>
    </widget-breadcrums>
    <widget-card></widget-card>
<!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">My Task</h4>
                      <p class="task-card-date">Sept 16, 2017</p>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task1" v-model="checked"/>
                      <label for="task1">Acknowledge service by contractor.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Today</span>
                        </a>
                      </label>
                      <span class="task-cat cyan">Approval</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task2" v-model="checked"/>
                      <label for="task2">Check the new <strong>APA standards</strong>.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Monday</span>
                        </a>
                      </label>
                      <span class="task-cat red accent-2">APA Standart</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task3" v-model="checked"/>
                      <label for="task3">Acknowledge expiry notification on <strong>Store Room (M251A), Monash University Malaysia</strong>.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Wednesday</span>
                        </a>
                      </label>
                      <span class="task-cat teal accent-4">Notification</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task4" v-model="checked" disabled="disabled" />
                      <label for="task4">I did it !</label>
                      <span class="task-cat deep-orange accent-2">Mobile App</span>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m12 l4">
                  <div id="flight-card" class="card">
                    <div class="card-header deep-orange accent-2">
                      <div class="card-title">
                        <h5 class="flight-card-title">FF201807EA786556</h5>
                        <p class="flight-card-date">June 18, 2018 Thu 04:50</p>
                      </div>
                    </div>
                    <div class="card-content-bg white-text">
                      <div class="card-content">
                        <div class="row flight-state-wrapper">
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">June 18, 2018</h4>
                              <p class="ultra-small">Previous Expiry Date</p>
                            </div>
                          </div>
                          <div class="col s2 m2 l2 center-align">
                            <i class="material-icons flight-icon">local_airport</i>
                          </div>
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">June 18, 2019</h4>
                              <p class="ultra-small">New Expiry Date</p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s6 m6 l6 center-align">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Weight:</span> 04.50 Kg</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Presure:</span> 5786 Pa</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Status:</span>&nbsp;
                                <label><span class="task-cat red accent-2">Expired</span></label>
                              </p>
                            </div>
                          </div>
                          <div class="col s6 m6 l6 center-align flight-state-two">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Weight:</span> 04.50 Kg</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Presure:</span> 5786 Pa</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Status:</span>&nbsp;
                                <label><span class="task-cat cyan">Approved</span></label>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="../../../public/dist-asset/materialize/images/gallary/3.png" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="../../../public/dist-asset/materialize/images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      <span class="card-title activator grey-text text-darken-4">Hisham Azli</span>
                      <p>
                        <i class="material-icons">perm_identity</i> Project Manager</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +6 (012) 222 8989</p>
                      <p>
                        <i class="material-icons">email</i> hisham@monash.com</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Hisham Azli
                        <i class="material-icons right">close</i>
                      </span>
                      <p>Here is some more information about this card.</p>
                      <p>
                        <i class="material-icons">perm_identity</i> Project Manager</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +6 (012) 222 8989</p>
                      <p>
                        <i class="material-icons">email</i> hisham@monash.com</p>
                      <p>
                        <i class="material-icons">cake</i> 18th June 1990
                      </p>
                      <p>
                      </p>
                      <p>
                        <i class="material-icons">airplanemode_active</i> BAR - AUS
                      </p>
                      <p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- blog card -->
                <div class="col s12 m12 l4 item">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#">
                        <img src="../../../public/dist-asset/materialize/images/gallary/3.png" alt="item-img">
                      </a>
                      <h4 class="card-title text-shadow m-0">Service History</h4>
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <a class="btn-floating waves-effect waves-light teal accent-4">
                          <i class="material-icons">share</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light red accent-2">
                          <i class="material-icons activator">info_outline</i>
                        </a>
                      </li>
                    </ul>
                    <div class="card-content">
                      <a href="#!"></a>
                      <p class="row mb-1">
                        <small class="right">
                          <a href="#!">
                            <span class="new badge red accent-2" data-badge-caption="Refill"></span>
                            <span class="new badge cyan m-0" data-badge-caption="Maintenance"></span>
                          </a>
                        </small>
                        <small class="left">18th June, 2018</small>
                      </p>
                      <p class="item-post-content">Service by <strong>Aito Firework</strong> for <strong>Lembaga Hasil Dalam Negeri</strong></p>
                      <hr />
                      <a href="#!"></a>
                      <p class="row mb-1">
                        <small class="right">
                          <a href="#!">
                            <span class="new badge red accent-2" data-badge-caption="Refill"></span>
                            <span class="new badge cyan m-0" data-badge-caption="Maintenance"></span>
                          </a>
                        </small>
                        <small class="left">18th June, 2018</small>
                      </p>
                      <p class="item-post-content">Service by <strong>Aito Firework</strong> for <strong>Lembaga Hasil Dalam Negeri</strong></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">
                        <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                      <p>Here is some more information about this item that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
                <!-- product-card -->
                <div class="col s12 m12 l4 item product">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">$189</a>
                      <a href="#">
                        <img src="../../../public/dist-asset/materialize/images/gallary/11.png" alt="item-img">
                      </a>
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <a class="btn-floating waves-effect waves-light cyan">
                          <i class="material-icons">add_shopping_cart</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light red accent-2">
                          <i class="material-icons">favorite</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light deep-orange accent-2">
                          <i class="material-icons activator">info_outline</i>
                        </a>
                      </li>
                    </ul>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a></p>
                          <p>Some more information about this product features and specification.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">
                        <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                      <p>Here is some more information about this item that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
                <!-- map-card -->
                <div class="col s12 m12 l4">
                  <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <a href="#">
                          <img src="../../../public/dist-asset/materialize/images/gallary/3.png" alt="item-img">
                        </a>
                        <h4 class="card-title text-shadow m-0">Company Profile</h4>
                      </div>
                      <div class="card-content">
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">pin_drop</i>
                        </a>
                        <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Monash University Malaysia</a>
                        </h4>
                        <p class="blog-post-content">Some more information about this company.</p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Monash University Malaysia
                          <i class="material-icons right">close</i>
                        </span>
                        <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">perm_identity</i> Hisham Azli</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">business</i> 125, Bangunan Teknokrat, Monash University Malaysia, Petaling Jaya</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">perm_phone_msg</i> +6 (013) 205 8989</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">email</i> hisham@monash.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card widgets end-->
  </div>
</template>

<script>
// @ is an alias to /src
// import Vuetable from "@/components/widget/Vuetable";
// import Datatable from '@/components/widget/Datatable'
import WidgetTable from '@/components/widget/Collection'
// import WidgetTable from '@/components/element-ui/components/Table'
import WidgetCard from "@/components/widget/Card";
import WidgetBreadcrums from "@/components/widget/Breadcrums";
import WidgetForm from "@/components/widget/Form/Form";

export default {
  components: {
    // WidgetVuetable,
    // WidgetDatatable,
    WidgetTable,
    WidgetBreadcrums,
    WidgetCard,
    WidgetForm
  },
  data() {
    return {
      checked : false,

    }
  },
};
</script>

