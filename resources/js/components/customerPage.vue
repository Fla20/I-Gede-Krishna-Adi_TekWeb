<template>
    <div>
        <h1 class="h3 mb-4 text-gray-800">Customer Page</h1>
        <button class="btn btn-primary mb-3">Tambah</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Customer</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in customer" :key="index">
                    <td>{{ item.id_customer }}</td>
                    <td>{{ item.customer_name }}</td>
                    <td>{{ item.customer_address }}</td>
                    <td>{{ item.customer_sex }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return {
            customer: {},
        };
    },
    created() {
        axios.get("/api/customer").then((response) => {
            this.customer = response.data;
            console.log(this.customer);
        });
    },
};
</script>
