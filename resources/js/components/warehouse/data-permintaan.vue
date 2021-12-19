<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        <div class="card-title">Data Permintaan Barang</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                Tanggal Permintaan
                                            </th>
                                            <th scope="col">
                                                Jumlah Permintaan
                                            </th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="permintaan in permintaans"
                                            :key="permintaan.id"
                                        >
                                            <td>
                                                {{ permintaan.tgl_permintaan }}
                                            </td>
                                            <td>{{ permintaan.jumlah }}</td>
                                            <td>
                                                {{ permintaan.status }}
                                            </td>
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
            permintaans: {},
        };
    },
    methods: {
        loadData() {
            axios
                .get("api/data_permintaan")
                .then(({ data }) => (this.permintaans = data));
        },
    },
    created() {
        this.loadData();
    },
};
</script>
