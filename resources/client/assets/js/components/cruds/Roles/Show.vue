<template>
  <section class="content-wrapper" style="min-height: 960px;">
    <section class="content-header">
      <h1>Roles</h1>
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
                      <th>Titre</th>
                      <td>{{ item.title }}</td>
                    </tr>
                    <tr>
                      <th>Permissions</th>
                      <td>
                        <span
                          class="badge badge-success"
                          v-for="permission in item.permission"
                        >{{ permission.title }}</span>
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
    ...mapGetters("RolesSingle", ["item"])
  },
  watch: {
    "$route.params.id": function() {
      this.resetState();
      this.fetchData(this.$route.params.id);
    }
  },
  methods: {
    ...mapActions("RolesSingle", ["fetchData", "resetState"])
  }
};
</script>


<style scoped>
</style>
