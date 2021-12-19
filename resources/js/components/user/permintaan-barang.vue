<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        <div class="card-title">Data Permintaan Barang</div>
                    </div>
                    <div class="tambah-permintaan">
                        <button
                            class="btn btn-success btn-tambah"
                            @click="showmodal"
                        >
                            <i class="fas fa-plus"></i> Tambah Permintaan
                        </button>
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
                                                {{ permintaan.jumlah }}
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

        <!-- Modal deklar -->
        <div
            class="modal fade"
            id="modalmuncul"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="modalmunculLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmunculLabel">
                            Tambah Permintaan Barang
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nik">NIK :</label>
                                        <input
                                            v-model="search"
                                            type="text"
                                            name="nik"
                                            id="nik"
                                            placeholder="NIK"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input
                                            type="text"
                                            name="nama"
                                            :value="databyNIK.name"
                                            placeholder="Nama"
                                            disabled
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="departemen"
                                            >Departemen :</label
                                        >
                                        <input
                                            type="text"
                                            name="departemen"
                                            id="departemen"
                                            :value="databyNIK.departemen"
                                            disabled
                                            placeholder="Departemen"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tanggal"
                                            >Tanggal Permintaan :</label
                                        >
                                        <input
                                            type="text"
                                            name="tanggal"
                                            id="tanggal"
                                            :value="tanggal"
                                            disabled
                                            placeholder="Tanggal Permintaan"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5>Daftar Barang</h5>
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Kuantiti</th>
                                                <th scope="col">Satuan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                v-for="data in dataDummy"
                                                :key="data.id"
                                            >
                                                <td>{{ data.nama_barang }}</td>
                                                <td>{{ data.kuantiti }}</td>
                                                <td>Pak</td>
                                                <td>
                                                    <button
                                                        @click="
                                                            deleteList(data.id)
                                                        "
                                                    >
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-3">
                                    <button
                                        @click="showmodaltambah"
                                        class="btn btn-success"
                                    >
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Batal
                            </button>
                            <button type="button" class="btn btn-primary">
                                Proses
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal tambah barang -->
        <div
            class="modal fade"
            id="modaltambah"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="modaltambahLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmunculLabel">
                            Tambah Daftar Barang
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form @submit.prevent="simpanData">
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label
                                    for="kategori"
                                    class="col-sm-7 col-form-label"
                                    >Kategori Barang :</label
                                >
                                <div class="col-sm-5">
                                    <select
                                        id="kategori"
                                        v-model="form.id_kategori"
                                        @change="getBarang"
                                    >
                                        <option
                                            v-for="kategori in kategoriBarang"
                                            :key="kategori.id"
                                            :value="kategori.id_kategori"
                                        >
                                            {{ kategori.kategori_barang }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="barang"
                                    id="lbarang"
                                    class="d-none col-sm-7 col-form-label"
                                    >Nama Barang :</label
                                >
                                <div class="col-sm-5">
                                    <select
                                        id="barang"
                                        v-model="form.nama_barang"
                                        class="d-none"
                                        @change="dummy"
                                    >
                                        <option
                                            v-for="barang in Barangs"
                                            :key="barang.id_barang"
                                            :value="barang.nama_barang"
                                        >
                                            {{ barang.nama_barang }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="kuantiti"
                                    class="col-sm-7 col-form-label"
                                    >Kuantiti :</label
                                >
                                <div class="col-sm-5">
                                    <input
                                        v-model="form.kuantiti"
                                        type="number"
                                        class="form-control"
                                        id="kuantiti"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="reset"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Batal
                            </button>
                            <button type="submit" class="btn btn-success">
                                Tambah
                            </button>
                        </div>
                    </form>
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
            kategoriBarang: {},
            Barangs: {},
            dataDummy: {},
            search: "",
            tanggal: new Date(),
            databyNIK: {},
            form: new Form({
                id_kategori: "",
                nama_barang: "",
                kuantiti: "",
            }),
            permintaan: new Form({
                nik: "",
                nama: "",
            }),
        };
    },
    methods: {
        loadData() {
            axios
                .get("api/data_permintaan")
                .then(({ data }) => (this.permintaans = data));
        },
        loadUser() {
            let nik = this.search;
            axios
                .get("api/datauser/" + nik)
                .then(({ data }) => (this.databyNIK = data));
        },
        showmodal() {
            $("#modalmuncul").modal("show");
        },
        showmodaltambah() {
            $("#modaltambah").modal("show");
        },
        loadKategoriBarang() {
            axios
                .get("api/kategoriBarang")
                .then(({ data }) => (this.kategoriBarang = data));
        },
        getBarang() {
            let k = this.form.id_kategori;
            axios
                .get("api/barangbyKategori/" + k)
                .then(({ data }) => (this.Barangs = data));
            document.getElementById("barang").classList.remove("d-none");
            document.getElementById("lbarang").classList.remove("d-none");
        },
        listDummy() {
            axios.get("api/dummy").then(({ data }) => (this.dataDummy = data));
        },
        deleteList(id) {
            axios.delete("api/dummy/" + id);
            this.listDummy();
        },
        simpanData() {
            this.form
                .post("api/dummy")
                .then(() => {
                    $("#modaltambah").modal("hide");
                    this.listDummy();
                })
                .catch();
        },
    },
    watch: {
        search: function () {
            this.loadUser();
        },
    },
    created() {
        this.loadData();
        this.loadKategoriBarang();

        this.bDummy(this.dataDummy.id_barang);
        this.list();
    },
};
</script>
