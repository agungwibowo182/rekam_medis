<template>
  <main>
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
          <th>Event Name</th>
          <th>Event Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.event_name }}</td>
          <td>{{ data.event_date }}</td>
          <td>{{ data.status }}</td>
          <td>
            <a
              href="#"
              class="btn btn-sm btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >EDIT</a
            >
            <a
              href="#"
              class="btn btn-sm btn-danger"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >ACTIVE</a
            >
          </td>
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
          event_name: 'QIS 2019',
          event_date: '05-10-2019',
          status: 'Non Active',
          action: 'EDIT | ACTIVE'
        },
        {
          event_name: 'Ocacle Cloud 2024',
          event_date: '05-10-2024',
          status: 'Active',
          action: 'EDIT | Deactive'
        }
      ]
    }
  }
}
</script>
