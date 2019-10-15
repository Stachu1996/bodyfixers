<template>
    <div class="row">

        <div class="col-sm-2 main-card card">
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav flex-column">

                <li class="nav-item" v-for="variant in variants">
                    <a role="tab" class="nav-link" :id="'tab-var-'+variant.id" data-toggle="tab" :href="'#tab-variant-'+variant.id" aria-selected="false">
                        <span>{{ variant.name }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-new" data-toggle="tab" href="#tab-variant-new" aria-selected="true">
                        <span>Nowy wariant</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="main-card card col-sm-8">
            <div class="tab-content">

                <div class="tab-pane tabs-animation" role="tabpanel" v-for="variant in variants" :id="'tab-variant-'+variant.id" >
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nazwa</label>
                            <input placeholder="Podaj nazwę wariantu" type="text"
                                   class="form-control"
                                   v-model="variant.name"
                                   >
                        </div>

                        <div class="form-group">
                            <label>Opis</label>
                            <textarea class="form-control" v-model="variant.description"></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="mb-2 mr-2 btn-transition btn btn-danger" type="button" @click="deleteValues(variant)">Usuń</button>
                            <button class="mb-2 mr-2 btn-transition btn btn-success" type="button" @click="updateValues(variant)">Zapisz</button>
                        </div>

                        <hr/>

                        <calories-component :variantid="variant.id" :caloriesArr="variant.calories"></calories-component>

                    </div>
                </div>

                <div class="tab-pane tabs-animation active" id="tab-variant-new" role="tabpanel">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nazwa</label>
                            <input placeholder="Podaj nazwę wariantu" type="text"
                                   class="form-control "
                                   v-model="newVariant.name"
                                   >
                        </div>

                        <div class="form-group">
                            <label>Opis</label>
                            <textarea class="form-control" v-model="newVariant.description"></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="mb-2 mr-2 btn-transition btn btn-success" type="button" @click="saveValues()">Zapisz</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    import toastr from "toastr";

    export default {
        name: "VariantsComponent",
        props: ['packetid'],
        data() {
            return {
                blockSaveAction: false,
                newVariant: {
                    name: '',
                    description: '',
                },
                variants: [],
            }
        },
        created: function() {
            this.loadValues();
        },
        methods: {
            loadValues(){
                let packetId = this.packetid;
                let _this = this;
                axios.get(`/panel/pakiety/${packetId}/variants`)
                    .then(function (response) {
                        _this.variants = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            saveValues(){
                if(!this.blockSaveAction) {
                    this.blockSaveAction = true;

                    let packetId = this.packetid;
                    let _this = this;
                    axios.post(`/panel/pakiety/${packetId}/variants/store`, this.newVariant)
                        .then(function (response) {
                            toastr.success('Pozytywnie dodano wariant');
                            _this.variants.push(response.data.variant);
                        })
                        .catch(function (error) {
                            toastr.error('Wystąpił błąd');
                            console.log(error);
                        })
                        .then(() => {
                            _this.blockSaveAction = false;
                            _this.newVariant.name = '';
                            _this.newVariant.description = '';
                        });
                }
            },
            updateValues(variant){
                let packetId = this.packetid;
                let _this = this;
                axios.patch(`/panel/variants/${variant.id}/update`, variant)
                    .then(function (response) {
                        toastr.success('Pozytywnie zaktualizowano wariant');
                    })
                    .catch(function (error) {
                        toastr.error('Wystąpił błąd');
                        console.log(error);
                    })
            },
            deleteValues(variant){
                let packetId = this.packetid;
                let _this = this;
                axios.delete(`/panel/variants/${variant.id}/destroy`)
                    .then(function (response) {
                        toastr.success('Pozytywnie usunięto wariant');
                        _this.variants = _.remove(_this.variants, function(n){
                            return n.id !== variant.id;
                        });
                    })
                    .catch(function (error) {
                        toastr.error('Wystąpił błąd');
                        console.log(error);
                    })
            }
        }
    }
</script>

<style scoped>

</style>
