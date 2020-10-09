<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(book,index) in books" :key="book.id">
                    <td>{{ index+1 }}</td>
                    <td>{{ book.judul }}</td>
                    <td>{{ book.pengarang }}</td>
                    <td>
                        <button class="btn btn-secondary" @click="edit(item.id)">Ubah</button>
                        <button class="btn btn-danger" @click="deletee(item.id)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
// var books=[]
export default {
    data : function() {
        return {
            books: []  
        }
    },
    mounted(){
        axios.get('/api/read').then(response => {
            this.books = response.data
        })
    }
}
</script>