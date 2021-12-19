<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">Data Barang</div>

                    <div class="card-body">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Keluar</th>
                                            <th scope="col">Sisa</th>
                                            <th scope="col">Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="barang in barangs"
                                            :key="barang.id"
                                        >
                                            <td>{{ barang.nama_barang }}</td>
                                            <td>{{ barang.id_kategori }}</td>
                                            <td>{{ barang.satuan }}</td>
                                            <td>{{ barang.stok }}</td>
                                            <td>{{ barang.keluar }}</td>
                                            <td>{{ barang.sisa }}</td>
                                            <td>{{ barang.tgl_masuk }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            barangs: {},
        };
    },
    methods: {
        loadData() {
            axios
                .get("api/dapatkan_dataBarang")
                .then(({ data }) => (this.barangs = data));
        },
    },
    created() {
        this.loadData();
    },
};
</script>
