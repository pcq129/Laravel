@include('common.header')

<form class="mainBody" action="url()">
    <label for="name">Name</label>
    <input name="name" type="text">

    <label for="email">Email</label>
    <input name="email" type="text">

    <label for="phone">Phone</label>
    <input name="phone" type="text">

    <label for="address">Address</label>
    <input name="address" type="text">

    <button type="submit"></button>
</form>

@include('common.footer')
