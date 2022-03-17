           <!-- Name input -->
           <div class="form-outline mb-4">
               <label class="form-label">Nome do produto</label>
               <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" />
           </div>

           <!-- Valor input -->
           <div class="form-outline mb-4">
               <label class="form-label">Valor do produto</label>
               <input type="text" name="valor" value="{{ $produto->valor }}" class="form-control" />
           </div>

           <!-- Quantidade input -->
           <div class="form-outline mb-4">
               <label class="form-label">Quantidade em estoque</label>
               <input type="text" name="estoque" value="{{ $produto->estoque }}" class="form-control" />
           </div>
