<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ubah Buku</div>
                    <div class="card-body">
                        <form @submit.prevent="updateBook()">
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
                            <button class="btn btn-primary">Ubah</button>
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
            form : {judul:'',pengarang:'',tahun_terbit:'',id:''}
        }
    },
    mounted() {
        axios
        .get('/api/show/'+window.localStorage.getItem('idbook'))
        .then(response =>{
            // console.log(response.data)
            this.form.judul = response.data.judul
            this.form.pengarang = response.data.pengarang
            this.form.tahun_terbit = response.data.tahun_terbit
            this.form.id = response.data.id
        })
    },
    methods: {
        updateBook(){
            axios
            .put('api/update/'+this.form.id,{
                judul : this.form.judul,
                pengarang : this.form.pengarang,
                tahun_terbit : this.form.tahun_terbit
            })
            .then(response => {
                alert("Berhasil Diubah")
                this.$router.push({name: 'showBook'})
            })
            .catch(response =>{
            if(response.response.data.errors){
                alert(JSON.stringify(response.response.data.errors))
            }
            })
        }
    }
}
</script>