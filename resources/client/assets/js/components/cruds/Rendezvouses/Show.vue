<template>
  <section class="content-wrapper" style="min-height: 95vh;">
    <section class="content-header">
      <h1>Rendezvous</h1>
    </section>

    <section class="content">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">View</h3>
          </div>

          <div class="box-body">
            <back-buttton></back-buttton>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>#</th>
                      <td>{{ item.id }}</td>
                    </tr>
                    <tr>
                      <th>date de rendez-vous</th>
                      <td>{{ item.meetingdate }}</td>
                    </tr>
                    <tr>
                      <th>Client</th>
                      <td>
                        <span
                          class="badge badge-success"
                          v-if="item.client !== null"
                        >{{ item.client.nom }}</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</template>


<script>
import { mapGetters, mapActions } from "vuex";

export default {
  data() {
    return {
      // Code...
    };
  },
  created() {
    this.fetchData(this.$route.params.id);
  },
  destroyed() {
    this.resetState();
  },
  computed: {
    ...mapGetters("RendezvousesSingle", ["item"])
  },
  watch: {
    "$route.params.id": function() {
      this.resetState();
      this.fetchData(this.$route.params.id);
    }
  },
  methods: {
    ...mapActions("RendezvousesSingle", ["fetchData", "resetState"])
  }
};
</script>


<style scoped>
</style>
