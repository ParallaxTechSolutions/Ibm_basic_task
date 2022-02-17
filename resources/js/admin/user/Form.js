import AppForm from '../app-components/Form/AppForm';

Vue.component('user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                gender:  '' ,
                street:  '' ,
                city:  '' ,
                state:  '' ,
                country:  '' ,
                post_code:  '' ,
                phone:  '' ,
                image:  '' ,
                status:  false ,
                email:  '' ,
                
            }
        }
    }

});