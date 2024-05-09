<template>
  <main>
    <h6>Select Event</h6>
    <select class="form-select form-select-sm mt-3">
      <option>ASUS SOLUTION 2024</option>
      <option>DANAMAS INSAN EMPLOYEE</option>
    </select>

    <div>
      <b-dropdown id="dropdown-1" text="Dropdown Button" class="m-md-2">
        <b-dropdown-item>First Action</b-dropdown-item>
        <b-dropdown-item>Second Action</b-dropdown-item>
        <b-dropdown-item>Third Action</b-dropdown-item>
        <b-dropdown-divider></b-dropdown-divider>
        <b-dropdown-item active>Active action</b-dropdown-item>
        <b-dropdown-item disabled>Disabled action</b-dropdown-item>
      </b-dropdown>
    </div>

    <br />
    <a
      href="#"
      class="btn btn-sm btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#kt_modal_create_app"
      id="kt_toolbar_primary_button"
      >Add New</a
    >
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.image }}</td>
          <td>{{ data.description }}</td>
          <td>{{ data.action }}</td>
        </tr>
      </tbody>
    </table>
  </main>
</template>
<script>
export default {
  data() {
    return {
      datas: [
        {
          image: 'banner.jpg',
          description: 'Event Fujitsu 2019',
          action: 'EDIT | DELETE'
        }
      ]
    }
  }
}
</script>
