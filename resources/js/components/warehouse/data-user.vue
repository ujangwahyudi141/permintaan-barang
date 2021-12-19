<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="main-card">
                    <div class="card-header">
                        <div class="card-title">Data User</div>
                    </div>
                    <div class="tambah-permintaan">
                        <button
                            class="btn btn-tambah btn-success"
                            @click="showmodal"
                        >
                            <i class="fas fa-plus"></i> Tambah User
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Departemen</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="user in users"
                                            :key="user.id"
                                        >
                                            <td>
                                                {{ user.name }}
                                            </td>
                                            <td>{{ user.departemen }}</td>
                                            <td>
                                                <button
                                                    class="btn btn-danger"
                                                    @click="deluser(user.nik)"
                                                >
                                                    Delete
                                                </button>
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

        <!-- Modal -->
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
                            Tambah Data User
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
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input
                                    type="nik"
                                    class="form-control"
                                    id="nik"
                                    v-model="form.nik"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label"
                                    >Nama</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    v-model="form.name"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="dep" class="form-label"
                                    >Departemen</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="dep"
                                    v-model="form.departemen"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="pass"
                                    v-model="form.password"
                                />
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
                            <button type="submit" class="btn btn-primary">
                                Proses
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
            users: {},
            form: new Form({
                nik: "",
                name: "",
                departemen: "",
                password: "",
            }),
        };
    },
    methods: {
        loadData() {
            axios.get("api/datauser").then(({ data }) => (this.users = data));
        },
        deluser(id) {
            axios.delete("api/datauser/" + id);
            this.loadData();
        },
        simpanData() {
            this.form
                .post("api/datauser")
                .then(() => {
                    $("#modalmuncul").modal("hide");
                    this.loadData();
                })
                .catch();
        },
        showmodal() {
            $("#modalmuncul").modal("show");
        },
    },
    created() {
        this.loadData();
    },
};
</script>
