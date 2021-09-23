<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employees</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create Employee
                            <router-link :to="{ name: 'EmployeesIndex'}" class="float-right">Back</router-link>
                        </div>

                        <div class="card-body">
                            <form method="POST">

                                <div class="form-group row">
                                    <label for="first_name"
                                           class="col-md-4 col-form-label text-md-right">First Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text"
                                               class="form-control"
                                               name="first_name"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="middle_name"
                                           class="col-md-4 col-form-label text-md-right">Middle Name</label>

                                    <div class="col-md-6">
                                        <input id="middle_name" type="text"
                                               class="form-control"
                                               name="middle_name"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="last_name"
                                           class="col-md-4 col-form-label text-md-right">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text"
                                               class="form-control"
                                               name="last_name"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address"
                                           class="col-md-4 col-form-label text-md-right">Address</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text"
                                               class="form-control"
                                               name="address"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="department"
                                           class="col-md-4 col-form-label text-md-right">Department</label>

                                    <div class="col-md-6">
                                        <select id="department" class="form-control" name="department"
                                                aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country"
                                           class="col-md-4 col-form-label text-md-right">Country</label>

                                    <div class="col-md-6">
                                        <select id="country" class="form-control" name="country"
                                                aria-label="Default select example">
                                            <option v-for="country in countries" :key="country.id" :value="country.id">
                                                {{ country.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="state"
                                           class="col-md-4 col-form-label text-md-right">State</label>

                                    <div class="col-md-6">
                                        <select id="state" class="form-control" name="state"
                                                aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city"
                                           class="col-md-4 col-form-label text-md-right">City</label>

                                    <div class="col-md-6">
                                        <select id="city" class="form-control" name="city"
                                                aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="zip_code"
                                           class="col-md-4 col-form-label text-md-right">Zip Code</label>

                                    <div class="col-md-6">
                                        <input id="zip_code" type="text"
                                               class="form-control"
                                               name="zip_code"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="birthdate"
                                           class="col-md-4 col-form-label text-md-right">Birth Date</label>

                                    <div class="col-md-6">
                                        <datepicker id="birthdate" input-class="form-control"></datepicker>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date_hired"
                                           class="col-md-4 col-form-label text-md-right">Hired Date</label>

                                    <div class="col-md-6">
                                        <datepicker id="date_hired" input-class="form-control"></datepicker>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Store
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';

export default {
    components: {
        Datepicker
    },
    data() {
        return {
            countries: [],
            states: [],
            cities: [],
            departments: []
        }
    },
    created() {
        this.getCountries();
    },
    methods: {
        getCountries() {
            axios
                .get("/api/employees/countries")
                .then(res => {
                    this.countries = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        }
    }
}
</script>

<style>

</style>
