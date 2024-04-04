<template>
  <main>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Event Name</th>
          <th>Date Event</th>
          <th>Partner</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data,index) in datas" :key="index">
          <td>{{ index+1 }}</td>
          <td>{{ data.event_name }}</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>

    </table>
  </main>
</template>
<script>
export default {
  data() {
    return {
      datas:[
        {
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },{
          event_name:"EVENT ASCSDS",
          time_start:"sdfsdfsd"
        },
      ]
    }
  },

}
</script>
