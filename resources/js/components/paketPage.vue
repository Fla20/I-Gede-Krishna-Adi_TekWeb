<template>
    <div>
        <h1 class="h3 mb-4 text-gray-800">Paket Page</h1>
        <button class="btn btn-primary mb-3">Tambah</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Paket</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Info</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in paket" :key="index">
                    <td>{{ item.id_paket }}</td>
                    <td>{{ item.paket_name }}</td>
                    <td>{{ item.paket_info }}</td>
                    <td>Rp{{ item.paket_price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return {
            paket: {},
        };
    },
    created() {
        axios.get("/api/paket-makanan").then((response) => {
            this.paket = response.data;
            console.log(this.paket);
        });
    },
};
</script>
