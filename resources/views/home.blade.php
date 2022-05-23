<h1>sono la home</h1>

{{-- un link che porta alla pagina della lista, il nome di questa route ce lo da larvel, lo leggo nella tabella che lancio da comando. Ovviamente la Route ci manda ad index perché dentro il controller, nella funzione index c'è il collegamento con la pagina listing --}}
<a href="{{ route('pics.index') }}">View Listings</a>
