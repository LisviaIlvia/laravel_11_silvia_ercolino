<x-layout>
    <x-display-errors/>
    <x-display-message/>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-white text-center">
                        <h2 class="my-2">Aggiungi Prodotto</h2>
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
    
                            <!-- Nome Prodotto -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nome</label>
                                <input type="text" name="name" value="{{ old('name') }}" 
                                       class="form-control rounded-pill" id="name" 
                                       placeholder="Inserisci il nome" required>
                            </div>
    
                            <!-- Descrizione -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Descrizione</label>
                                <textarea name="description" class="form-control rounded-3" 
                                          id="description" rows="5" placeholder="Inserisci la descrizione" required>{{ old('description') }}</textarea>
                            </div>
    
                            <!-- Prezzo -->
                            <div class="mb-3">
                                <label for="price" class="form-label fw-bold">Prezzo</label>
                                <div class="input-group">
                                    <input type="text" name="price" value="{{ old('price') }}" 
                                           class="form-control rounded-start-pill" id="price" required>
                                    <span class="input-group-text bg-white border rounded-end-pill">€</span>
                                </div>
                            </div>
    
                            <!-- Immagine -->
                            <div class="mb-3">
                                <label for="image" class="form-label fw-bold">Immagine</label>
                                <input type="file" name="image" id="image" class="form-control rounded-pill" accept="image/*">
                            </div>
    
                            <!-- Pulsante Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning btn-lg rounded-pill">Aggiungi Prodotto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pulsante per tornare alla lista dei prodotti -->
        <div class="d-flex justify-content-center my-5">
            <a href="{{route('index.product')}}" class="btn border-black  btn-warning btn-lg ">Torna ai Prodotti</a>
        </div>
    </div>
    
</x-layout>