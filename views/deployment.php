<kiss-container class="kiss-margin">
    <ul class="kiss-breadcrumbs">
        <li><a href="<?=$this->route('/vercel-deploy')?>"><?=t('Vercel Deploy')?></a></li>
    </ul>

    <vue-view>
        <template>
            <div>
              <p>Click the button below to trigger deployment on Front End side. This will update the content on Front End side.<p>
              <button type="button" class="kiss-button" @click="deployNow()"><?=t('Deploy Front End')?></button>
            </div>
        </template>

        <script type="module">

            export default {
                methods: {
                    deployNow() {

                        App.ui.confirm('Are you sure want to deploy the Front End now?', () => {

                            App.ui.block();

                            this.$request('/vercel-deploy/deployFrontEnd', {}).then(res => {
                                if (res.job.id) {
                                  App.ui.unblock();
                                  App.ui.notify('Deployment requested! Website will be updated in 1-3 minutes.');
                                }
                                else {
                                  App.ui.unblock();
                                  App.ui.notify('Deployment request failed! Please contact the administrator.', 'error');
                                }
                            });
                        });
                    },
                }
            }
        </script>
    </vue-view>
</kiss-container>