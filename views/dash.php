<div class="row" id="content">


</div>

<script>
    const content=document.getElementById('content');

    fetch('controller/listaProdutos.php',
    {
        method:'GET',
        headers:{
            'Content-Type':'text/plain;charset=UTF-8'
        },

    }).then(response=>{
        return response.json();
    }).then(lista=>{

        lista.map((f)=>{
            let prod=`
            <div class="col-sm-3  m-4">
              <div class="card" >
                <img src="./storage/${f.img}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><strong>${f.produto}</strong></h5>
                  <p class="card-text"><strong>${f.marca}</strong></p>
                  <p class="card-text"><strong>${f.preco}</strong></p>
                  <a href="carrinho?id=${f.id_produto}" class="btn btn-primary">Adicione ao Carrinho</a>
                </div>
              </div>
            </div>
            `;

            content.innerHTML +=prod;
        })
    })

     
</script>

