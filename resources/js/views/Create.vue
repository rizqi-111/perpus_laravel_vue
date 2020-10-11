<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Tambah Buku</div>
                    <div class="card-body">
                        <form @submit.prevent="addBook()">
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input
                                type="textfield"
                                class="form-control"
                                placeholder="Masukkan Judul Film"
                                v-model="form.judul"
                                required
                                >
                            </div>
                            <div class="form-group">
                                <label>Nama Pengarang</label>
                                <input
                                type="text"
                                class="form-control"
                                placeholder="Masukkan Harga Film"
                                v-model="form.pengarang"
                                required
                                >
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input
                                type="date"
                                class="form-control"
                                placeholder="Masukkan Harga Film"
                                v-model="form.tahun_terbit"
                                required
                                >
                            </div>
                            <button class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data : function() {
        return {
            form : {judul:'',pengarang:'',tahun_terbit:''}
        }
    },
    methods: {
        addBook() {
            axios
            .post('/api/addbook', {
                judul: this.form.judul,
                pengarang: this.form.pengarang,
                tahun_terbit: this.form.tahun_terbit
            })
            .then(response =>{
                alert("Berhasil Tambah")
                this.$router.push({name: 'showBook'})
            })        
        }
    }
}
</script>