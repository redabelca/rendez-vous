<template>
  <section class="content-wrapper" style="min-height: 95vh;">
    <section class="content-header">
      <h1>Utilisateurs</h1>
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
                      <th>Nom</th>
                      <td>{{ item.name }}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{ item.email }}</td>
                    </tr>
                    <tr>
                      <th>Role</th>
                      <td>
                        <span class="badge badge-success" v-for="role in item.role">{{ role.title }}</span>
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
    ...mapGetters("UsersSingle", ["item"])
  },
  watch: {
    "$route.params.id": function() {
      this.resetState();
      this.fetchData(this.$route.params.id);
    }
  },
  methods: {
    ...mapActions("UsersSingle", ["fetchData", "resetState"])
  }
};
</script>


<style scoped>
</style>
