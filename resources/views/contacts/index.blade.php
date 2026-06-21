<h1>Daftar Kontak</h1>
<a href="{{ route('contacts.create') }}">Tambah Kontak Baru</a>

<table border="1" style="width: 100%; border-collapse: collapse; text-align: left; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 8px;">Nama</th>
            <th style="padding: 8px;">Email/No Telp</th>
            <th style="padding: 8px;">Biodata</th>
            <th style="padding: 8px;">Aksi</th> </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td style="padding: 8px; border: 1px solid #ccc;">{{ $contact->name_kontak }}</td>
            <td style="padding: 8px; border: 1px solid #ccc;">{{ $contact->email }}</td>
            <td style="padding: 8px; border: 1px solid #ccc;">{{ $contact->message }}</td>
            <td style="padding: 8px; border: 1px solid #ccc;">
  <td style="padding: 8px; border: 1px solid #ccc;">
      <a href="{{ route('contacts.edit', $contact->id) }}" style="margin-right: 10px;">Edit</a>
      <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
          @csrf
          @method('DELETE')
          <button type="submit" style="color: red; cursor: pointer;">Hapus</button>
      </form>
  </td>
  </tr>
  @endforeach
    </tbody>
</table>