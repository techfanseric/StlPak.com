<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 10
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if( get_field('section1') ):?>
<div class="hp10Section1 paddTop15 paddBottom15">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<ul class="wus1Slider">
					<?php while ( have_rows('section1') ) : the_row();?>
						<?php $wus1Img = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $wus1Img['url']; ?>" alt="<?php echo $wus1Img['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<!-- Luminous Intelligence (Seamless Glass) Hero Section -->
<div id="tech-hero-section" style="position: relative; width: 100%; height: auto; overflow: hidden; background: #fdfdfd; padding: 80px 0 40px;">
    <!-- WebGL Canvas -->
    <div id="canvas-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>
    
    <!-- Content Overlay -->
    <div class="hero-content" style="position: relative; z-index: 2; display: flex; align-items: center; pointer-events: none;">
        <div class="container" style="display: flex; align-items: center;">
            <div class="row" style="width: 100%;">
                <div class="col-lg-9 col-md-11 col-sm-12">
                    <!-- Seamless Glass Container -->
                    <div class="hero-text-container" style="pointer-events: auto; background: rgba(255, 255, 255, 0.0); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); padding: 40px; border-radius: 30px; margin-right: auto;">
                        
                        <!-- AI Accent Line -->
                        <div class="anim-entry delay-1" style="width: 60px; height: 4px; background: linear-gradient(90deg, #4ecdc4, transparent); margin-bottom: 25px; border-radius: 2px;"></div>

                        <h1 class="anim-entry delay-2" style="color: #0b1e3b; font-family: 'Helvetica Neue', sans-serif; font-weight: 700; font-size: 3.5rem; line-height: 1.1; margin-bottom: 25px; letter-spacing: -1.5px; text-align: left;">
                            Leading Food-Grade <br> Packaging Manufacturer <br>
                            <span style="background: linear-gradient(120deg, #16529b, #4ecdc4); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Trusted Global Partner</span>
                        </h1>
                        
                        <div class="anim-entry delay-3" style="display: flex; gap: 30px; margin-bottom: 40px; justify-content: flex-start;">
                            <div class="feature-point">
                                <div class="feature-icon" style="color: #8b92a0; opacity: 0.7; font-size: 20px; font-weight: 700; margin-bottom: 5px;"><span style="font-size: 24px;">8</span><span style="font-size: 16px; font-weight: 400;">YR</span></div>
                                <div class="feature-text" style="color: #4a5a75; font-size: 0.85rem; font-weight: 300; line-height: 1.3;">
                                    Manufacturing <br>Excellence
                                </div>
                            </div>
                            <div class="feature-point">
                                <div class="feature-icon" style="display: flex; align-items: center; justify-content: flex-start;margin: 4px 0 5px; opacity: 0.7;"><svg t="1765645430106" class="icon" viewBox="0 0 1365 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="71815" width="24" height="20"><path d="M1237.333333 0H1194.666667v409.6c0 8.533333-8.533333 25.6-8.533334 34.133333l-119.466666-179.2-119.466667 179.2c-8.533333-8.533333-8.533333-17.066667-8.533333-34.133333V0H128C59.733333 0 0 51.2 0 119.466667v785.066666c0 68.266667 59.733333 119.466667 128 119.466667h1109.333333c68.266667 0 128-51.2 128-119.466667V119.466667c0-68.266667-59.733333-119.466667-128-119.466667zM768 631.466667c0 25.6-17.066667 42.666667-42.666667 42.666666H256c-25.6 0-42.666667-17.066667-42.666667-42.666666s17.066667-42.666667 42.666667-42.666667h469.333333c25.6 0 42.666667 17.066667 42.666667 42.666667zM298.666667 264.533333l59.733333-110.933333 59.733333 110.933333 128 17.066667-93.866666 85.333333 25.6 119.466667L358.4 426.666667l-119.466667 59.733333 25.6-119.466667-93.866666-85.333333 128-17.066667z m853.333333 605.866667H256c-25.6 0-42.666667-17.066667-42.666667-42.666667s17.066667-42.666667 42.666667-42.666666h896c25.6 0 42.666667 17.066667 42.666667 42.666666s-17.066667 42.666667-42.666667 42.666667z" p-id="71816" fill="#8b92a0"></path></svg></div>
                                <div class="feature-text" style="color: #4a5a75; font-size: 0.85rem; font-weight: 300; line-height: 1.3;">
                                    FSSC22000 & <br>FDA Certified
                                </div>
                            </div>
                            <div class="feature-point">
                                <div class="feature-icon" style="display: flex; align-items: center; justify-content: flex-start; opacity: 0.7;"><svg t="1765644291489" class="icon" viewBox="0 0 3328 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="18424" id="mx_n_1765644291492" width="56" height="28"><path d="M1720.429714 325.668571l123.355429-5.010285-103.460572 369.261714h221.257143l103.460572-369.261714 120.539428 5.010285 49.115429-175.36H1769.581714l-49.152 175.36z m-458.130285 95.926858c-30.939429 173.202286-200.484571 276.955429-386.194286 276.955428s-318.208-103.753143-287.232-276.955428c30.281143-169.618286 201.801143-279.808 386.706286-279.808s317.037714 110.189714 286.72 279.808z m-451.108572 2.852571c-11.008 61.549714 28.306286 103.789714 95.305143 103.789714 67.035429 0 121.417143-42.24 132.388571-103.789714 10.24-57.234286-24.795429-105.216-95.049142-105.216s-122.404571 47.945143-132.644572 105.216z" fill="#8b92a0" p-id="18425"></path><path d="M1193.545143 649.142857c63.158857 30.756571 148.626286 49.371429 225.353143 49.371429 131.620571 0 275.419429-63.707429 298.459428-192.512 16.347429-91.611429-43.52-135.972571-133.888-154.587429l-48.274285-10.020571c-16.310857-3.584-43.264-6.436571-39.68-26.477715 3.949714-22.198857 33.389714-28.635429 52.736-28.635428 47.652571 0 87.259429 17.883429 121.088 40.813714l84.443428-138.130286c-54.016-32.182857-115.126857-47.250286-184.576-47.250285-132.425143 0-276.845714 71.570286-299.702857 199.68-15.104 84.443429 49.554286 129.536 133.522286 143.140571l43.117714 7.168c19.565714 3.584 48.237714 5.741714 43.885714 30.061714-4.352 24.356571-40.484571 32.219429-62.281143 32.219429-50.870857 0-94.537143-22.198857-129.243428-49.371429l-9.910857-7.862857-95.049143 152.393143zM2665.435429 163.949714a477.001143 477.001143 0 0 0-144.603429-22.198857c-178.468571 0-340.662857 125.952-368.786286 283.392-27.501714 153.856 86.820571 273.371429 260.425143 273.371429 39.570286 0 123.099429-6.436571 161.316572-21.467429l42.496-201.837714c-41.033143 30.793143-84.845714 50.102857-135.716572 50.102857-66.230857 0-115.382857-45.787429-104.777143-105.216 10.496-58.660571 72.886857-105.179429 139.117715-105.179429 50.066286 0 90.002286 25.051429 120.283428 54.381715l30.244572-205.348572z m354.230857-22.198857c-184.905143 0-356.425143 110.226286-386.706286 279.808-30.939429 173.202286 101.522286 276.955429 287.268571 276.955429s355.254857-103.753143 386.194286-276.955429c30.281143-169.581714-101.814857-279.808-286.756571-279.808z m-31.707429 177.481143c70.253714 0 105.289143 47.945143 95.049143 105.216-11.008 61.549714-65.353143 103.789714-132.388571 103.789714-67.035429 0-106.313143-42.24-95.305143-103.789714 10.24-57.270857 62.390857-105.216 132.644571-105.216z m-2342.034286-276.406857A613.229714 613.229714 0 0 0 465.554286 16.018286C242.980571 16.018286 40.667429 168.265143 5.595429 358.582857c-34.267429 186.002286 108.288 330.459429 324.827428 330.459429 49.371429 0 153.526857-7.789714 201.179429-25.965715l53.028571-243.931428c-51.163429 37.193143-105.837714 60.562286-169.289143 60.562286-82.578286 0-143.908571-55.369143-130.669714-127.158858 13.092571-70.948571 90.916571-127.158857 173.494857-127.158857 62.427429 0 112.237714 30.281143 150.016 65.755429l37.741714-248.32zM1127.314286 761.6l8.448 144.749714h2.121143c4.388571-14.774857 9.252571-30.244571 16.054857-44.726857l46.08-100.022857h74.861714l11.300571 144.749714h2.121143c3.913143-14.153143 8.301714-28.964571 14.262857-42.788571l44.982858-101.961143h101.595428l-137.398857 242.541714h-85.211429l-7.497142-131.913143h-3.218286c-3.254857 12.544-6.144 24.758857-11.410286 36.681143l-43.812571 95.232h-83.053715l-51.565714-242.541714h101.339429z" fill="#8b92a0" p-id="18426"></path><path d="M1442.084571 761.6h94.134858l-14.336 81.700571h59.904l14.336-81.700571h94.098285l-42.569143 242.541714H1553.554286l14.774857-84.297143h-59.904l-14.811429 84.297143h-94.098285l42.569142-242.541714z" fill="#8b92a0" p-id="18427"></path><path d="M1965.787429 883.529143c-13.677714 77.824-88.502857 124.489143-170.496 124.489143s-140.470857-46.628571-126.793143-124.489143c13.385143-76.251429 89.088-125.769143 170.715428-125.769143 81.627429-0.036571 139.958857 49.517714 126.573715 125.769143z m-199.131429 1.28c-4.864 27.648 12.507429 46.628571 42.093714 46.628571 29.586286 0 53.613714-18.980571 58.441143-46.628571 4.534857-25.746286-10.934857-47.286857-41.947428-47.286857-31.049143 0-54.089143 21.540571-58.587429 47.286857z m220.562286-123.209143h97.682285l-28.928 164.681143h81.993143l-13.641143 77.860571h-179.675428l42.569143-242.541714z m381.842285 155.684571l4.388572 3.547429c15.323429 12.214857 34.596571 22.198857 57.051428 22.198857 9.618286 0 25.563429-3.547429 27.501715-14.482286 1.938286-10.934857-10.752-11.885714-19.382857-13.494857l-19.053715-3.218285c-37.083429-6.107429-65.609143-26.368-58.953143-64.329143 10.093714-57.563429 73.874286-89.746286 132.315429-89.746286 30.683429 0 57.636571 6.765714 81.481143 21.211429l-37.266286 62.098285c-14.957714-10.313143-32.438857-18.322286-53.467428-18.322285-8.557714 0-21.540571 2.889143-23.296 12.873142-1.572571 9.033143 10.313143 10.276571 17.517714 11.922286l21.321143 4.498286c39.862857 8.374857 66.340571 28.306286 59.099428 69.485714-10.166857 57.892571-73.654857 86.528-131.766857 86.528-33.865143 0-71.606857-8.374857-99.474286-22.198857l41.984-68.571429z" fill="#8b92a0" p-id="18428"></path><path d="M2704.64 916.333714l-3.876571-42.788571c-1.060571-10.276571-0.950857-20.918857-0.950858-31.195429h-3.547428l-30.793143 73.984h39.168z m-85.065143 87.808h-103.387428l135.972571-242.541714h107.995429l53.321142 242.541714h-103.387428l-3.620572-30.244571h-73.801142l-13.092572 30.244571z" fill="#8b92a0" p-id="18429"></path><path d="M2847.890286 761.6h97.682285l-28.891428 164.681143h81.993143l-13.677715 77.860571h-179.675428l42.569143-242.541714z m197.814857 0h180.736l-11.629714 66.267429h-82.358858l-4.059428 23.149714h75.227428l-11.044571 63.049143H3117.348571l-4.169142 23.808h85.211428l-11.629714 66.267428h-183.588572l42.532572-242.541714zM21.065143 1004.544h1035.593143l-0.073143-0.365714h-0.841143l-13.092571-61.696H21.065143v62.061714z m0-88.137143h1016.027428l-13.202285-62.061714H21.065143v62.061714z m0-88.576h996.864l-4.498286-22.601143-9.179428-43.117714H21.065143v65.718857zM2185.033143 761.6h180.736l-11.629714 66.267429h-82.358858l-4.059428 23.149714h75.227428l-11.044571 63.049143h-75.227429l-4.169142 23.808h85.211428l-11.629714 66.267428h-183.588572l42.532572-242.541714zM3220.845714 683.849143h-10.24l8.557715-43.666286h-14.811429l1.828571-9.398857h39.826286l-1.828571 9.398857h-14.811429l-8.521143 43.666286z m67.876572 0h-9.545143l8.704-44.324572h-0.146286l-17.810286 44.324572h-10.020571l-0.256-44.324572h-0.146286l-8.704 44.324572h-9.545143l10.386286-53.028572h14.921143l0.658286 41.801143h0.146285l16.932572-41.801143h14.811428l-10.386285 53.028572z" fill="#8b92a0" p-id="18430"></path></svg></div>
                                <div class="feature-text" style="color: #4a5a75; font-size: 0.85rem; font-weight: 300; line-height: 1.3;">
                                    Serving Leading <br>Retailers
                                </div>
                            </div>
                            <div class="feature-point">
                                <div class="feature-icon" style="display: flex; align-items: center; justify-content: flex-start; margin-left: -10px; opacity: 0.7;"><svg t="1765645040084" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="55051" width="52" height="28"><path transform="translate(-50, 0)" d="M472.6 416.4h113.8v113.8H472.6zM319.9 416.4h113.8v113.8H319.9zM472.6 263.7h113.8v113.8H472.6zM625.3 263.7h113.8v113.8H625.3zM319.9 263.7h113.8v113.8H319.9zM625.3 416.4h113.8v113.8H625.3zM778.1 416.4h113.8v113.8H778.1zM778.1 263.7h113.8v113.8H778.1zM199.9 451.2h61v13.4h-61zM200.5 483.3h61v13.4h-61z" fill="#8b92a0" p-id="55052"></path><path transform="translate(-50, 0)" d="M1012.9 574.3a38.01 38.01 0 0 0-26.8-11.1H271l-0.2-134c-0.1-10.4-8.5-18.9-18.9-18.9h-35.7l-0.4-88.2c0-7-5.6-12.6-12.6-12.6l-54.6-0.2-0.5-104.1c0.1-3.5-1.7-6.7-4.6-8.5-3-1.8-29.7-1.8-32.7 0-3 1.8-4.8 5-4.6 8.5l0.5 104.2H63c-7 0-12.6 5.6-12.6 12.6l-0.3 240.7-12.2 0.3c-10.1 0-19.7 4-26.8 11.1C4 581.3 0 591 0 601l75.9 189.6c9.8 19.6 26.4 37.9 56.9 37.9h739.6c27 0 46.5-17.5 56.9-37.9l94.8-189.6c-0.1-10-4.1-19.6-11.2-26.7zM118.2 427.8h60v30h-60v-30z m0.6 107.2v-30h60v30h-60zM249 687.7c-5.9 14.2-19.7 23.4-35.1 23.4-20.9 0-37.9-17-37.9-37.9 0-15.3 9.2-29.2 23.4-35 14.2-5.9 30.5-2.6 41.3 8.2 10.9 10.8 14.2 27.1 8.3 41.3z m166.5 23.4c-10.1 0-19.7-4-26.8-11.1a38.01 38.01 0 0 1-11.1-26.8c0-20.9 17-37.9 37.9-37.9s37.9 17 37.9 37.9-17 37.9-37.9 37.9z m236.6-23.4c-5.9 14.2-19.7 23.4-35.1 23.4-10.1 0-19.7-4-26.8-11.1a38.01 38.01 0 0 1-11.1-26.8c0-15.3 9.2-29.2 23.4-35 14.2-5.9 30.5-2.6 41.3 8.2 10.9 10.8 14.2 27.1 8.3 41.3z m166.5 23.4c-10.1 0-19.7-4-26.8-11.1a38.01 38.01 0 0 1-11.1-26.8c0-20.9 17-37.9 37.9-37.9s37.9 17 37.9 37.9-17 37.9-37.9 37.9z" fill="#8b92a0" p-id="55053"></path></svg></div>
                                <div class="feature-text" style="color: #4a5a75; font-size: 0.85rem; font-weight: 300; line-height: 1.3;">
                                    Supporting Both <br>Large & Small Orders
                                </div>
                            </div>
                        </div>
                        
                        <div class="hero-actions anim-entry delay-4" style="display: flex; gap: 20px; justify-content: flex-start;">
                            <a href="#products" class="btn-hero-primary" style="padding: 12px 35px; background: #0b1e3b; color: #fff; text-decoration: none; font-weight: 600; border-radius: 50px; transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1); letter-spacing: 0.5px; border: 1px solid #0b1e3b;">View Products</a>
                            <a href="#contact" class="btn-hero-outline" style="padding: 12px 35px; background: rgba(255,255,255,0.5); color: #0b1e3b; text-decoration: none; font-weight: 600; border-radius: 50px; transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1); letter-spacing: 0.5px; border: 1px solid rgba(11, 30, 59, 0.1);">Get Free Samples</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Entrance Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .anim-entry {
        opacity: 0;
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }

    .btn-hero-primary:hover {
        background: #16529b !important;
        border-color: #16529b !important;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(22, 82, 155, 0.15);
    }
    .btn-hero-outline:hover {
        background: #fff !important;
        border-color: #0b1e3b !important;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
    }
    @media (max-width: 768px) {
        #tech-hero-section { height: auto !important; padding: 60px 0; }
        #tech-hero-section h1 { font-size: 2.2rem !important; }
        #tech-hero-section p { font-size: 1rem !important; }
        .hero-text-container { padding: 30px 20px !important; backdrop-filter: none !important; text-align: center !important; }
        .hero-actions { flex-direction: column; }
        .hero-content { padding: 0 20px !important; align-items: center !important; }
        h1, p { text-align: center !important; } /* Center on mobile for balance */
        .hero-actions { justify-content: center !important; }
        .container { padding: 0 15px !important; } /* Ensure mobile padding */

        /* Feature points mobile layout */
        .anim-entry.delay-3 {
            flex-direction: column !important;
            gap: 20px !important;
            max-width: 100% !important;
        }
        .feature-icon {
            font-size: 18px !important;
            margin-bottom: 3px !important;
        }
        .feature-text {
            font-size: 0.8rem !important;
        }
    }
</style>

<!-- Load Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('canvas-container');
    if (!container) return; // Safety check
    
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    const geometry = new THREE.PlaneGeometry(30, 30, 64, 64);

    const material = new THREE.ShaderMaterial({
        uniforms: {
            uTime: { value: 0 },
            uResolution: { value: new THREE.Vector2(container.offsetWidth, container.offsetHeight) },
            uColor1: { value: new THREE.Color('#ffffff') }, 
            uColor2: { value: new THREE.Color('#e0f7fa') }, // Very pale cyan
            uColor3: { value: new THREE.Color('#f0f4f8') }  // Pale blue-grey
        },
        vertexShader: `
            varying vec2 vUv;
            varying float vElevation;
            uniform float uTime;

            void main() {
                vUv = uv;
                vec3 pos = position;
                
                // Faster, more noticeable undulation
                float wave1 = sin(pos.x * 0.5 + uTime * 0.5) * 1.5;
                float wave2 = cos(pos.y * 0.3 + uTime * 0.4) * 1.5;
                float wave3 = sin(pos.x * 1.0 + pos.y * 0.5 + uTime * 0.3) * 0.5;
                
                pos.z += (wave1 + wave2 + wave3) * 0.8;
                vElevation = pos.z;

                gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);
            }
        `,
        fragmentShader: `
            varying vec2 vUv;
            varying float vElevation;
            uniform vec3 uColor1;
            uniform vec3 uColor2;
            uniform vec3 uColor3;

            void main() {
                // Soft gradient mix
                float mixstrength = (vElevation + 2.0) * 0.25;
                vec3 color = mix(uColor1, uColor2, mixstrength);
                color = mix(color, uColor3, sin(mixstrength * 3.14));
                
                float sheen = smoothstep(0.4, 0.6, abs(fract(vElevation * 0.5) - 0.5));
                color += vec3(0.02, 0.05, 0.08) * sheen;

                gl_FragColor = vec4(color, 1.0);
            }
        `,
        wireframe: false,
        side: THREE.DoubleSide
    });

    const mesh = new THREE.Mesh(geometry, material);
    mesh.rotation.x = Math.PI * 0.25; // Inverted perspective (depth extends to bottom)
    scene.add(mesh);

    camera.position.z = 8;

    function animate() {
        requestAnimationFrame(animate);
        material.uniforms.uTime.value += 0.015; // Increased speed (3x faster)
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = container.offsetWidth / container.offsetHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        material.uniforms.uResolution.value.set(container.offsetWidth, container.offsetHeight);
    });
});
</script>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section3 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row rowFlexEnd">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
			<?php if(get_sub_field('button_text')): ?>
			<div class="col-sm-12 col-lg-6 hp10CTA pc6CTA"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
		<div class="row cust-row text-center paddTop40">
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<?php $hp10s3Img = get_sub_field('image') ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="hp10s3Box">
					<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp10s3Img['url']; ?>" alt="<?php echo $hp10s3Img['alt']; ?>" width="<?php echo $hp10s3Img['width']; ?>" height="<?php echo $hp10s3Img['height']; ?>"></a></div>
					<div class="hp10s3Content">
						<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp10s3Text"><?php the_sub_field('text');?></div>
						<div class="hp10s3Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</div>
			</div>
			<?php if($countSM == 2):?>
				<div class="clearfix visible-sm"></div>
				<?php $countSM = 0; ?>
			<?php endif; ?>
			<?php if($count == 3):?>
				<div class="clearfix hidden-sm"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section4 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
		</div>
		<div class="row cust-row text-center paddTop40">
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $hp10s4Img = get_sub_field('image') ?>
			<div class="col-sm-12 col-md-6 paddBottom30">
				<div class="hp10s4Box hp10s3Box">
					<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp10s4Img['url']; ?>" alt="<?php echo $hp10s4Img['alt']; ?>" width="<?php echo $hp10s4Img['width']; ?>" height="<?php echo $hp10s4Img['height']; ?>"></a></div>
					<div class="hp10s3Content">
						<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp10s3Text"><?php the_sub_field('text');?></div>
						<div class="hp10s3Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</div>
			</div>
			<?php if($count == 2):?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section5 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('products') ) : the_row();?>
				<li class="slide">
					<div class="pc6s5Box">
						<?php $pc6s5Img = get_sub_field('image') ?>
						<div class="pc6s5Img"><img src="<?php echo $pc6s5Img['url']; ?>" alt="<?php echo $pc6s5Img['alt']; ?>" width="<?php echo $pc6s5Img['width']; ?>" height="<?php echo $pc6s5Img['height']; ?>"></div>
						<div class="pc6s5Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="pc6s5Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('heading')):?>
<div class="hp10Banner" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-md-6">
				<div class="bannerHeading"><?php the_sub_field('heading');?></div>
				<div class="paddTop10 clrWhite"><?php the_sub_field('text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('faqs')):?>
<div class="hp10Section7 paddTop70 paddBottom70 greySection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<div class="hp10FAQs">
				<?php $count = 1; ?>
				<?php if( get_sub_field('faqs') ):?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10s7Text"><?php the_sub_field('text');?></div>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="pc6Section5 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('products') ) : the_row();?>
				<li class="slide">
					<div class="pc6s5Box">
						<?php $pc6s5Img = get_sub_field('image') ?>
						<div class="pc6s5Img"><img src="<?php echo $pc6s5Img['url']; ?>" alt="<?php echo $pc6s5Img['alt']; ?>" width="<?php echo $pc6s5Img['width']; ?>" height="<?php echo $pc6s5Img['height']; ?>"></div>
						<div class="pc6s5Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="pc6s5Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9') ):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="pc6Section6 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>