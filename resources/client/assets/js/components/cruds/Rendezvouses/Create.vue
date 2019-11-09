<template>
  <section class="content-wrapper" style="min-height: 95vh;">
    <section class="content-header">
      <h1>Rendezvous</h1>
    </section>

    <section class="card">
      <div class="col-xs-12 card-body">
        <form @submit.prevent="submitForm" novalidate>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create</h3>
            </div>

            <div class="box-body">
              <back-buttton></back-buttton>
            </div>

            <bootstrap-alert />

            <div class="box-body">
              <div class="form-group">
                <label for="meetingdate">date de rendez-vous *</label>
                <date-picker
                  :value="item.meetingdate"
                  :config="$root.dpconfigDatetime"
                  name="meetingdate"
                  placeholder="Enter date de rendez-vous *"
                  @dp-change="updateMeetingdate"
                ></date-picker>
              </div>
              <div class="form-group">
                <label for="client">Client *</label>
                <v-select
                  name="client"
                  label="nom"
                  @input="updateClient"
                  :value="item.client"
                  :options="clientsAll"
                />
              </div>
            </div>

            <div class="box-footer">
              <vue-button-spinner
                class="btn btn-primary btn-sm"
                :isLoading="loading"
                :disabled="loading"
              >Save</vue-button-spinner>
            </div>
          </div>
        </form>
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
  computed: {
    ...mapGetters("RendezvousesSingle", ["item", "loading", "clientsAll"])
  },
  created() {
    this.fetchClientsAll();
  },
  destroyed() {
    this.resetState();
  },
  methods: {
    ...mapActions("RendezvousesSingle", [
      "storeData",
      "resetState",
      "setMeetingdate",
      "setClient",
      "fetchClientsAll"
    ]),
    updateMeetingdate(e) {
      this.setMeetingdate(e.target.value);
    },
    updateClient(value) {
      this.setClient(value);
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: "rendezvouses.index" });
          this.$eventHub.$emit("create-success");
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
};
</script>


<style scoped>
</style>
