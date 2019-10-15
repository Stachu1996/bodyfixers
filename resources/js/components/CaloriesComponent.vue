<template>
    <div>
        <div class="table-responsive">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">Kaloryczność</h5>
            </div>

            <table class="mb-0 table">
                <thead>
                <tr>
                    <th>Kaloryczność</th>
                    <th>Cena</th>
                    <th class="text-center"><i class="fa fa-bolt icon-gradient bg-sunny-morning"> </i></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="calory in calories">
                    <td>
                        <span v-if="editingId!==calory.id">{{ calory.name }}</span>
                        <input v-else class="form-control form-control-sm" type="text" placeholder="Kaloryczność" v-model="calory.name"/>
                    </td>
                    <td>
                        <span v-if="editingId!==calory.id">{{ calory.price }} PLN</span>
                        <input v-else class="form-control form-control-sm" type="number" placeholder="0.00" pattern="^\d*(\.\d{0,2})?$" step="0.1" v-model="calory.price"/>
                    </td>
                    <td class="text-center">
                        <button type='button' v-if="editingId!==calory.id" @click="editingId=calory.id" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-edit"></i></button>
                        <button type='button' v-else @click="updateCalory(calory)" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success"><i class="fa fa-save"></i></button>
                        <button type='button' @click="deleteCalory(calory)" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <tr >
                    <td><input class="form-control form-control-sm" type="text" placeholder="Kaloryczność" v-model="newCalory.name"/></td>
                    <td><input class="form-control form-control-sm" type="number" placeholder="0.00" pattern="^\d*(\.\d{0,2})?$" step="0.1" v-model="newCalory.price"/></td>
                    <td class="text-center">
                        <button @click="saveCalory()" type="button" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success"><i class="fa fa-plus"></i> Dodaj</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
    import toastr from "toastr";

    export default {
        name: "CaloriesComponent",
        props: ['variantid', 'caloriesArr'],
        data() {
            return {
                blockSaveAction: false,
                editingId: null,
                newCalory: {
                    name: '',
                    price: 0.00,
                },
                calories: []
            }
        },
        created: function() {
            if(this.caloriesArr) this.calories = this.caloriesArr;
        },
        methods: {
            saveCalory() {
                if (!this.blockSaveAction) {
                    this.blockSaveAction = true;

                    let variantId = this.variantid;
                    let _this = this;
                    axios.post(`/panel/variants/${variantId}/calories/store`, this.newCalory)
                        .then(function (response) {
                            toastr.success('Pozytywnie dodano koloryczność');
                            _this.calories.push(response.data.calory);
                        })
                        .catch(function (error) {
                            toastr.error('Wystąpił błąd');
                            console.log(error);
                        })
                        .then(() => {
                            _this.blockSaveAction = false;
                            _this.newCalory.name = '';
                            _this.newCalory.price = 0;
                        });
                }
            },
            updateCalory(calory) {
                let _this = this;
                axios.patch(`/panel/calories/${calory.id}/update`, calory)
                    .then(function (response) {
                        toastr.success('Pozytywnie zaktualizowano kaloryczność');
                        _this.editingId = null;
                    })
                    .catch(function (error) {
                        toastr.error('Wystąpił błąd');
                        console.log(error);
                    })
            },
            deleteCalory(calory) {
                let _this = this;
                axios.delete(`/panel/calories/${calory.id}/destroy`)
                    .then(function (response) {
                        toastr.success('Pozytywnie usunięto kaloryczność');
                        _this.calories = _.remove(_this.calories, function (n) {
                            return n.id !== calory.id;
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
