const treatments = { 
  "Teeth Cleaning": {
      heading: "Teeth Cleaning – A Fresh, Healthy Smile",
      description: `
          <p>Our <strong>professional teeth cleaning</strong> services effectively remove 
          <strong>plaque and tartar buildup</strong>, preventing cavities and gum disease.</p>
          <p>✅ Benefits: Cleaner teeth, fresher breath, and reduced risk of gum disease.</p>
      `
  },
  "Dental Fillings": {
      heading: "Dental Fillings – Restoring Strength & Beauty",
      description: `
          <p>Our <strong>dental fillings</strong> restore teeth damaged by 
          <strong>cavities or minor fractures</strong>.</p>
          <p>✅ Benefits: Strengthened teeth, restored functionality, and natural appearance.</p>
      `
  },
  "Tooth Extraction": {
      heading: "Tooth Extraction – Safe & Painless Procedure",
      description: `
          <p>Performed with <strong>care and precision</strong>, using <strong>local anesthesia</strong> for a 
          <strong>pain-free experience</strong>.</p>
          <p>✅ Benefits: Removal of damaged teeth, reduced pain, and improved oral health.</p>
      `
  },
  "Root Canal Treatment": {
      heading: "Root Canal Treatment – Saving Natural Teeth",
      description: `
          <p>Our <strong>root canal treatments</strong> are designed to <strong>relieve pain and save infected teeth</strong>.</p>
          <p>✅ Benefits: Pain relief, preserved natural teeth, and restored oral function.</p>
      `
  },
  "Teeth Whitening": {  
      heading: "Teeth Whitening – Brighter, More Radiant Smiles",
      description: `
          <p>Removes <strong>stains and discoloration</strong>, restoring the natural brightness of your smile.</p>
          <p>✅ Benefits: Whiter, brighter smile and enhanced confidence.</p>
      `
  },
  "Braces": {
      heading: "Braces – Straightening with Precision",
      description: `
          <p>Orthodontic treatments with braces to correct <strong>misaligned teeth and bite issues</strong>.</p>
          <p>✅ Benefits: Straighter teeth, improved bite alignment, and enhanced aesthetics.</p>
      `
  },
  "Dental Crowns & Bridges": {
      heading: "Dental Crowns & Bridges – Permanent Smile Restoration",
      description: `
          <p>Our <strong>crowns and bridges</strong> provide a <strong>durable solution</strong> for damaged or missing teeth, 
          restoring both **function and appearance**.</p>
          <p>✅ Benefits: Stronger teeth, improved chewing ability, and enhanced aesthetics.</p>
      `
  },
  "Dentures": {
      heading: "Dentures – Comfortable & Natural Smile Restoration",
      description: `
          <p>Our <strong>custom-made dentures</strong> provide an effective solution for <strong>replacing multiple missing teeth</strong>. 
          Designed for <strong>comfort and stability</strong>, they restore both <strong>function and aesthetics</strong>, allowing you to eat, speak, 
          and smile with confidence. We offer <strong>full and partial dentures</strong> to suit individual needs.</p>
          <p>✅ <strong>Benefits:</strong> Improved chewing and speech, restored facial structure, and a natural-looking smile.</p>
      `
  },
  "Dental Implants": {
      heading: "Dental Implants – Permanent Tooth Replacement",
      description: `
          <p>Our <strong>dental implants</strong> offer a <strong>long-term solution for missing teeth</strong>, effectively mimicking the 
          look, feel, and function of natural teeth. Implants consist of a <strong>titanium post</strong> anchored to the jawbone, 
          providing a stable foundation for crowns or bridges.</p>
          <p>✅ <strong>Benefits:</strong> Permanent tooth replacement, enhanced chewing ability, preserved jawbone health, 
          and a natural smile appearance.</p>
      `
  },
  "Gum Treatment": {
      heading: "Gum Treatment – Healthier Gums, Healthier Smile",
      description: `
          <p>Our <strong>professional gum treatments</strong> effectively address <strong>gingivitis, periodontitis, and gum recession</strong>. 
          We use <strong>scaling, root planing, and laser therapy</strong> to eliminate bacteria, reduce inflammation, and promote 
          gum health.</p>
          <p>✅ <strong>Benefits:</strong> Reduced gum inflammation, prevention of tooth loss, fresher breath, and improved 
          overall oral health.</p>
      `
  }
};

function loadTreatmentDetails() {
  const params = new URLSearchParams(window.location.search);
  let treatment = params.get("treatment");

  if (treatment) {
      // Normalize the treatment key by replacing dashes and encoding with spaces
      treatment = decodeURIComponent(treatment.replace(/-/g, " ").trim());

      // Check if the treatment exists
      if (treatments[treatment]) {
          document.getElementById("treatment-title").innerText = treatments[treatment].heading;
          document.getElementById("treatment-heading").innerText = treatments[treatment].heading;
          document.getElementById("treatment-description").innerHTML = treatments[treatment].description;
      } else {
          // Display "Not Found" message if treatment doesn't exist
          document.getElementById("treatment-title").innerText = "Treatment Not Found";
          document.getElementById("treatment-heading").innerText = "Oops!";
          document.getElementById("treatment-description").innerText = "No details available for this treatment.";
      }
  } else {
      // Handle empty parameter case
      document.getElementById("treatment-title").innerText = "No Treatment Selected";
      document.getElementById("treatment-heading").innerText = "Please Select a Treatment";
      document.getElementById("treatment-description").innerText = "Go back and choose a valid treatment.";
  }
}

window.onload = loadTreatmentDetails;
