

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1><span id="policyName">Policy Page: </span></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">This Page</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<div class="mt-5">
    <div class="container my-5">
        <div class="row">
            <div id="policy" class="col-12"> 
                <h1>Lorem ipsum dummey text Lorem ipsum dummey text Lorem ipsum dummey text Lorem ipsum dummey text Lorem ipsum dummey text Lorem ipsum dummey text </h1>
            </div>
        </div>
    </div>
</div>

<script>
    
    async function Policy(){
        let searchParams=new URLSearchParams(window.location.search);
        let type=searchParams.get('type');
        
        if(type ==='about'){
            $('#policyName').text('About');
        }if(type ==='refund'){
            $('#policyName').text('Refund');
        }if(type ==='terms'){
            $('#policyName').text('Terms & Condition');
        }if(type ==='contact'){
            $('#policyName').text('Contact Us');
        }if(type ==='complain'){
            $('#policyName').text('Complain');
        }

        let res = await axios.get("/PolicyByType"+type);
        
        let des = res.data['data'];
        $('#policy').html(des);

        
    }

</script>