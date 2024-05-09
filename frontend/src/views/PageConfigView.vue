<template>
  <main>
    <h6>Select Event</h6>
    <select class="form-select form-select-sm mt-3">
      <option>ASUS SOLUTION 2024</option>
      <option>DANAMAS INSAN EMPLOYEE</option>
    </select>

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
          <th>Custom ID</th>
          <th>Subject</th>
          <th>Content</th>
          <th>Header Image</th>
          <th>Footer Image</th>
          <th>Size Width</th>
          <th>Size Height</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.custom_id }}</td>
          <td>{{ data.subject }}</td>
          <td>{{ data.content }}</td>
          <td>{{ data.header_image }}</td>
          <td>{{ data.footer_image }}</td>
          <td>{{ data.size_width }}</td>
          <td>{{ data.size_height }}</td>
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
              >DELETE</a
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
          custom_id: 'REG',
          subject: 'Music Event',
          content: 'My Music Event Now',
          header_image: 'image.jpg',
          footer_image: 'image.jpg',
          size_width: '100',
          size_height: '100',
          action: 'EDIT | DELETE'
        }
      ]
    }
  }
}
</script>
