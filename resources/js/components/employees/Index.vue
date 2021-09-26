<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employees</h1>
        </div>
        <div class="row">
            <div class="card mx-auto">
                <div>

                    <div class="alert alert-success">
                    </div>

                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <input type="search" name="search" class="form-control mb-2"
                                               id="inlineFormInput"
                                               placeholder="Search..">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <router-link :to="{ name: 'EmployeesCreate'}" class="btn btn-primary mb-2 float-right">
                                Create
                            </router-link>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <td scope="row">#{{ employee.id }}</td>
                            <td>{{ employee.first_name }}</td>
                            <td>{{ employee.last_name }}</td>
                            <td>{{ employee.address }}</td>
                            <td>{{ employee.department[0].name }}</td>
                            <td>
                                <a href="">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            employees: []
        }
    },
    created() {
        this.getEmployees();
    },
    methods: {
        getEmployees() {
            axios.get("api/employees")
                .then(res => {
                    this.employees = res.data.data
                }).catch(error => {
                console.log(error);
            })
        }
    }
}
</script>

<style>

</style>
