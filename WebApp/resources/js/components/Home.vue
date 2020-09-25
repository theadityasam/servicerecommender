<template>
    <div class="container animated fadeIn slower" >
        <div class="row">
            <div class="col-md-4" v-for="(a,index) in array" :key="index">
                <div class="card">
                    <div class="card-img-top" >
                        <img :src="a[0].image" alt="" height="230px" width="100%" style="object-fit: cover" >
                        <div class="card-title ml-3" style="font-size: 1.5rem;">
                            <br>
                            {{a[0].name}}
                        </div>
                        <div class="card-body">
                            <p>Product type: {{a[0].product_type}}</p>
                            <p>Warranty: {{a[0].warranty}} </p>
                        </div>
                        <hr>
                        <div class="card-footer" style="color: orangered">
                            <button @click="services(a[0].product_type)" class="btn btn-secondary stretched-link">Recommended</button>
                            <p v-if="event===true">{{Service[prediction[0]]}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home.vue",
        data(){
            return{
                array:[],
                new: false,
                Service: [
                    "Battery Issue Services",
                    "Configuration Services",
                    "Contact Dell Support",
                    "Hardware Services",
                    "Premium Support Services",
                    "Premium Support Plus Services",
                    "Security Services",
                    "Software Update Services",
                    "Warranty Services"
                ],
                prediction: 0,
                event: false
            }
        },

        methods:{
          services(type)
          {
              axios.post('http://127.0.0.1:8080/predict' ,{
                   headers: {
                       "Content-Type": "application/json"
                   },
                  "Type of Product": type,
                  "Purchase_binned": 4,
                  "purchase_data": "2015-03-31 00:00:00",
                  "Warranty_binned": 0,
                  "Faulty software": "Slow",
                  "Faulty hardware": "Not Faulty",
                  "Backup_binned": 5,
                  "Antivirus_binned": "NO",
                  "Services Used": "free",
                  "Tickets_binned": 10,
                  "Update_period_binned": 3,
                  "last_update": "16/03/2016",
                  "Wired/Wireless": "-1"
                  })
                  .then((value) => {
                      // console.log(value.data.prediction);
                      this.prediction = value.data.prediction;
                      this.prediction  = JSON.parse(this.prediction);
                      console.log(this.prediction[0]);
                      this.event = true
                  })
          }
        },

        created() {
            axios.get('/purchases')
                .then((data) =>{
                    // console.log(data);
                    this.array = data.data;
                    if(this.array.length === 0)
                    {
                        this.new = true;
                    }
                });
        }
    }
</script>

<style scoped>
    .container{
        color: white !important;
    }

    hr {
        overflow: visible; /* For IE */
        padding: 0;
        border: none;
        border-top: medium double white;
        color: white;
        text-align: center;
    }

</style>

