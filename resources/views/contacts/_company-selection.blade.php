<select class="custom-select">
    <option value="" selected>All Companies</option>
    <?php foreach ($companies as $id => $company): ?>
        <option value="{{ $id }}">{{ $company }}</option>
    <?php endforeach ?>
</select>