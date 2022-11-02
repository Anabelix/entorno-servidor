
    alert("Funcionando");
    const canvas = document.querySelector('#c');
    const renderer = new THREE.WebGLRenderer({canvas});
    const fov = 75;
    const aspect = 2;  // the canvas default
    const near = 0.1;
    const far = 5;
    //const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
    const camera = new THREE.PerspectiveCamera(80, window.innerWidth/window.innerHeight);
    camera.position.z=2;

    const scene = new THREE.Scene();

    {
      const color = 0xFFFFFF;
      const intensity = 1;
      const light = new THREE.DirectionalLight(color, intensity);
      light.position.set(-1, 2, 4);
      scene.add(light);
    }

    let loader = new THREE.GLTFLoader();
    loader.load('js/panda_inst.glb', function(gltf){
      scene.add(gltf.scene);
      renderer.render(scene, camera)
    });
/*     const boxWidth = 1;
    const boxHeight = 1;
    const boxDepth = 1;
    const geometry = new THREE.BoxGeometry(boxWidth, boxHeight, boxDepth);
    const material = new THREE.MeshPhongMaterial({color: 0xF3005A});
    const cube = new THREE.Mesh(geometry, material);



    const radius = 1;  // ui: radius
    const detail = 12;  // ui: detail
    const geometry2 = new THREE.IcosahedronGeometry(radius, detail);
    const material2 = new THREE.MeshStandardMaterial({ color: 0xF3005A, 
      clearcoat:1,
      clearcoatRoughness:0.1,
      roughness: 0.5,
      metalness: 0.7,
      wireframe:true
    });
    const esfera = new THREE.Mesh(geometry2, material2); */

    //scene.add(esfera, cube);  

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.render(scene, camera);

    function render(time) {
        time *= 0.0002;  // convert time to seconds
       
/*         cube.rotation.x = time;
        cube.rotation.y = time;
        esfera.rotation.x = time;
        esfera.rotation.y = time; */
       
        renderer.render(scene, camera);
       
        requestAnimationFrame(render);
      }
      requestAnimationFrame(render);

