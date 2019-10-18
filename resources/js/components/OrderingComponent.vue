<template>
    <div id="order" class="">
        <div class="row justify-content-center">

            <div class="bs-stepper col-12 col-md-9">
                <div class="bs-stepper-header justify-content-center" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#packetList">
                        <button type="button" class="step-trigger" role="tab" aria-controls="packetList" id="packet-list-trigger">
                            <span class="bs-stepper-circle"></span>
                        </button>
                    </div>
                    <div class="step" data-target="#information-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                            <span class="bs-stepper-circle"></span>
                        </button>
                    </div>
                    <div class="step" data-target="#information-part2">
                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part2" id="information-part-trigger2">
                            <span class="bs-stepper-circle"></span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="packetList" class="content" role="tabpanel" aria-labelledby="packet-list-trigger">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="text-center">Wybierz pakiet</h2>
                            </div>

                            <div v-for="packet in packets" class="col-6 col-md-4 col-lg-3 mt-2" @click="addPacketToCartShowModal(packet)">
                                <div class="card" style="border-radius: 20px">
                                    <img class="card-img-top" :src="getPacketImage(packet)" alt="" style="border-radius: 20px;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ packet.name }}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        test
                    </div>
                    <div id="information-part2" class="content" role="tabpanel" aria-labelledby="information-part-trigger2">
                        xxx
                    </div>
                </div>
            </div>

            <div class="col-3 d-none d-md-block">
                <h4 class="text-success mb-4" v-if="cart.items.length>0">Wybrałeś:</h4>
                <h4 v-else class="mt-2">Koszyk jest pusty</h4>

                <div class="row justify-content-center">

                    <ul class="list-unstyled col-12">
                        <li class="media align-items-center border-bottom mb-1 pb-2" v-for="item in cart.items">
                            <img src="https://via.placeholder.com/100x50" alt="Obrazek pakietu w koszyku" class="mx-2" style="border-radius: 20px">
                            <div class="media-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="m-0 p-0">TITLE</h5>
                                    <button class="btn bg-transparent text-danger ">X</button>
                                </div>
                                <div>
                                    <small class="d-block mb-0">Posiłki: <strong>2</strong></small>
                                    <small class="d-block mb-0">Kaloryczność: <strong>1200 kcal</strong></small>
                                    <small class="d-block mb-0">Cena za dzień: <strong>od 55 zł</strong></small>
                                </div>
                                <div class="d-flex mt-1">
                                    <button class="btn btn-sm btn-outline-success ml-1 d-flex align-items-center py-0 px-1">-</button>
                                    <input type="text" pattern="[0-9]*" class="d-inline-block border-0 text-center" style="max-width: 2rem" value="1">
                                    <button class="btn btn-sm btn-outline-success ml-1 d-flex align-items-center py-0 px-1" >+</button>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="col-12 d-flex flex-column align-items-center justify-content-center align-items-center mt-1" v-if="cart.items.length>0">
                        <button class="btn btn-outline-success mb-3">Przejdź dalej</button>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-between mt-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#koszyk"><i class="fas fa-shopping-cart"></i>Koszyk <span class="badge badge-pill badge-light" v-if="cart.items.length>0">{{ cart.items.length }}</span></button>
                <button class="btn btn-outline-success" @click="neee()"><i class="fas fa-shopping-cart"></i>Dalej</button>
            </div>
        </div>

        <!-- Add Packet Modal -->
        <div class="modal fade" id="addPacketToCart" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" style="border-radius: 20px">
                <div class="modal-content border-0" style="border-radius: 20px">
                    <div class="modal-header p-0 border-0">
                        <img class="card-img-top" :src="pickedPacketImage" alt="obrazek pakietu" style="border-radius: 20px">
                    </div>
                    <div class="modal-body my-4">
                        <h4 class="text-center mb-2">{{ pickedPacket.name }}</h4>

                        <h6 class="text-center mb-3 mt-4" v-if="pickedPacket.variants && pickedPacket.variants.length>0">Wybierz ilość posiłków</h6>
                        <h6 class="text-center mb-3 mt-4" v-else>Niestety pakiet nie jest kompletny</h6>
                        <div class="d-inline-flex flex-wrap justify-content-center" v-if="pickedPacket.variants">
                            <button class="btn mx-1" v-for="variant in pickedPacket.variants" @click="pickedVariant=variant"
                                    :class="[ pickedVariant === variant ? 'btn-success' : 'btn-outline-success' ]"
                            >{{ variant.name }}</button>
                        </div>

                        <h6 class="text-center mb-3 mt-4" v-if="pickedVariant.calories && pickedVariant.calories.length>0">Wybierz kaloryczność</h6>
                        <h6 class="text-center mb-3 mt-4" v-else-if="Object.entries(pickedVariant).length>0">Niestety pakiet nie jest kompletny</h6>
                        <div class="d-inline-flex flex-wrap justify-content-center" v-if="pickedVariant.calories">
                            <button class="btn mx-1" v-for="calory in pickedVariant.calories" @click="pickedCalory=calory"
                                    :class="[ pickedCalory === calory ? 'btn-success' : 'btn-outline-success' ]"
                            >{{ calory.name }}</button>
                        </div>

                        <div class="d-flex justify-content-center align-items-center mb-3 mt-5" v-if="Object.entries(pickedCalory).length !== 0">
                            <h6 class="mr-4 m-0">Ilość:</h6>
                            <button class="btn btn-outline-success mr-1 d-flex align-items-center" style="padding-left: .875rem; padding-right: .875rem"
                                     @click="pickedQuantity = pickedQuantity>1 ? --pickedQuantity : pickedQuantity ">-</button>
                            <input type="text" class="d-inline-block border-0 text-center" pattern="[0-9]*" style="max-width: 5rem" v-model="pickedQuantity">
                            <button class="btn btn-outline-success ml-1 d-flex align-items-center" @click="pickedQuantity++">+</button>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center align-items-center mb-3 mt-5">
                            <button class="btn btn-outline-success mb-3"
                                    v-if="Object.entries(pickedCalory).length !== 0 && pickedQuantity > 0"
                                    @click="addPacketToCart()"
                            >Dodaj</button>
                            <button class="btn btn-outline-danger border-0" @click="clearModal()">Anuluj</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Modal -->
        <div class="modal fade" id="koszyk" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" style="border-radius: 20px">
                <div class="modal-content border-0" style="border-radius: 20px">
                    <div class="modal-body my-4">
                        <h4 class="text-success mb-4" v-if="cart.items.length>0">Wybrałeś:</h4>
                        <h4 v-else class="mt-2">Koszyk jest pusty</h4>

                        <div class="row justify-content-center">

                            <ul class="list-unstyled col-12">
                                <li class="media align-items-center border-bottom mb-1 pb-2" v-for="item in cart.items">
                                    <img src="https://via.placeholder.com/100x50" alt="Obrazek pakietu w koszyku" class="mx-2" style="border-radius: 20px">
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="m-0 p-0">TITLE</h5>
                                            <button class="btn bg-transparent text-danger ">X</button>
                                        </div>
                                        <div>
                                            <small class="d-block mb-0">Posiłki: <strong>2</strong></small>
                                            <small class="d-block mb-0">Kaloryczność: <strong>1200 kcal</strong></small>
                                            <small class="d-block mb-0">Cena za dzień: <strong>od 55 zł</strong></small>
                                        </div>
                                        <div class="d-flex mt-1">
                                            <button class="btn btn-sm btn-outline-success ml-1 d-flex align-items-center py-0 px-1">-</button>
                                            <input type="text" pattern="[0-9]*" class="d-inline-block border-0 text-center" style="max-width: 2rem" value="1">
                                            <button class="btn btn-sm btn-outline-success ml-1 d-flex align-items-center py-0 px-1" >+</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="col-12 d-flex flex-column align-items-center justify-content-center align-items-center mt-5">
                                <button class="btn btn-outline-success mb-3" v-if="cart.items.length>0">Przejdź dalej</button>
                                <button class="btn btn-outline-danger border-0" data-dismiss="modal">Kontynuuj zakupy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Stepper from 'bs-stepper'

    export default {
        name: "OrderingComponent",
        data() {
            return {
                stepper: null,
                packets: [],
                pickedPacket: {},
                pickedVariant: {},
                pickedCalory: {},
                pickedQuantity: 1,
                cart: {
                    items: [
                        1,2
                    ]
                }
            }
        },
        created: function () {
            this.loadPackets();

            let _this = this;
            $(document).ready(function () {
                _this.stepper = new Stepper($('.bs-stepper')[0])
            });
        },
        computed: {
            pickedPacketImage(){
                if(this.pickedPacket.image !== null) return window.location.origin + '/storage/' + this.pickedPacket.image;
                return "https://via.placeholder.com/100x50"
            }
        },
        methods: {
            getPacketImage(packet){
                if(packet.image !== null) return window.location.origin + '/storage/' + packet.image;
                return "https://via.placeholder.com/100x50"
            },
            neee() {
                this.stepper.next();
            },
            loadPackets() {
                let _this = this;
                axios.get(`zamawianie/packets`)
                    .then(function (response) {
                        _this.packets = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },

            addPacketToCart() {

            },

            addPacketToCartShowModal(packet) {
                console.log(packet.name);
                this.pickedPacket = packet;
                $('#addPacketToCart').modal('show');
            },
            clearModal(){
                $('#addPacketToCart').modal('hide');
                $('#koszyk').modal('hide');

                this.pickedPacket = '';
                this.pickedVariant = '';
                this.pickedCalory = '';
            }
        }
    }



</script>

<style scoped>

</style>
